<?php
/**
 * Oasys Digital Signage
 */
namespace Xibo\Connector;

/**
 * A provider import request/result.
 * This is used to exchange a search result from a provider for a mediaId in the library.
 */
class ProviderImport implements \JsonSerializable
{
    /** @var \Xibo\Entity\SearchResult */
    public $searchResult;

    /** @var \Xibo\Entity\Media media */
    public $media;

    /** @var bool has this been configured for import */
    public $isConfigured = false;

    /** @var string the URL to use for the download */
    public $url;

    /** @var bool has this been uploaded */
    public $isUploaded = false;

    /** @var bool is error state? */
    public $isError = false;

    /** @var string error message, if in error state */
    public $error;

    /**
     * @return \Xibo\Connector\ProviderImport
     */
    public function configureDownload(): ProviderImport
    {
        $this->isConfigured = true;
        $this->url = $this->searchResult->download;
        return $this;
    }

    /**
     * @param $message
     * @return $this
     */
    public function setError($message): ProviderImport
    {
        $this->isUploaded = false;
        $this->isError = true;
        $this->error = $message;
        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'item' => $this->searchResult,
            'media' => $this->media,
            'isUploaded' => $this->isUploaded,
            'isError' => $this->isError,
            'error' => $this->error
        ];
    }
}
