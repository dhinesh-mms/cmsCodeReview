<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */
namespace Xibo\Factory;

use Xibo\Entity\TagLink;

trait TagTrait
{
    /**
     * Gets tags for entityId
     * @param string $table
     * @param string $column
     * @param int $entityId
     * @return TagLink[]
     */
    public function loadTagsByEntityId(string $table, string $column, int $entityId)
    {
        $tags = [];

        $sql = 'SELECT tag.tagId, tag.tag, `'. $table .'`.value FROM `tag` INNER JOIN `'.$table.'` ON `'.$table.'`.tagId = tag.tagId WHERE `'.$table.'`.'.$column.' = :entityId';

        foreach ($this->getStore()->select($sql, ['entityId' => $entityId]) as $row) {
            $sanitizedRow = $this->getSanitizer($row);

            $tagLink = new TagLink($this->getStore(), $this->getLog(), $this->getDispatcher());
            $tagLink->tagId = $sanitizedRow->getInt('tagId');
            $tagLink->tag = $sanitizedRow->getString('tag');
            $tagLink->value = $sanitizedRow->getString('value');

            $tags[] = $tagLink;
        }

        return $tags;
    }

    /**
     * Gets tags for entity
     * @param string $table
     * @param string $column
     * @param array $entityIds
     * @param \Xibo\Entity\EntityTrait[] $entries
     */
    public function decorateWithTagLinks(string $table, string $column, array $entityIds, array $entries): void
    {
        // Query to get all tags from a tag link table for a set of entityIds
        $sql = 'SELECT `tag`.`tagId`, `tag`.`tag`, `' . $table . '`.`value`, `' . $table . '`.`' . $column . '`'
            . '   FROM `tag` '
            . '     INNER JOIN `' . $table . '` ON `' . $table . '`.`tagId` = `tag`.`tagId` '
            . '  WHERE `' . $table . '`.`' . $column . '` IN(' . implode(',', $entityIds) .')';

        foreach ($this->getStore()->select($sql, []) as $row) {
            // Add each tag returned above to its respective entity
            $sanitizedRow = $this->getSanitizer($row);

            $tagLink = new TagLink($this->getStore(), $this->getLog(), $this->getDispatcher());
            $tagLink->tagId = $sanitizedRow->getInt('tagId');
            $tagLink->tag = $sanitizedRow->getString('tag');
            $tagLink->value = $sanitizedRow->getString('value', ['defaultOnEmptyString' => true]);

            foreach ($entries as $entry) {
                if ($entry->$column === $sanitizedRow->getInt($column)) {
                    $entry->tags[] = $tagLink;
                }
            }
        }

        // Set the original value on the entity.
        foreach ($entries as $entry) {
            $entry->setOriginalValue('tags', $entry->tags);
        }
    }

    public function getTagUsageByEntity(string $tagLinkTable, string $idColumn, string $nameColumn, string $entity, int $tagId, &$entries)
    {
        $sql = 'SELECT `'.$tagLinkTable.'`.'.$idColumn.' AS entityId, `'.$entity.'`.'.$nameColumn.' AS name, `'. $tagLinkTable .'`.value, \''.$entity.'\' AS type FROM `'.$tagLinkTable.'` INNER JOIN `'.$entity.'` ON `'.$tagLinkTable.'`.'.$idColumn.' = `'.$entity.'`.'.$idColumn.' WHERE `'.$tagLinkTable.'`.tagId = :tagId ';
        foreach ($this->getStore()->select($sql, ['tagId' => $tagId]) as $row) {
            $entries[] = $row;
        }

        return $entries;
    }
}
