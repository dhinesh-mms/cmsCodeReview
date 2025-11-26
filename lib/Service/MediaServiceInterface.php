<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Service;

use Slim\Routing\RouteParser;
use Stash\Interfaces\PoolInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Xibo\Entity\User;
use Xibo\Factory\FontFactory;
use Xibo\Factory\MediaFactory;
use Xibo\Helper\SanitizerService;
use Xibo\Storage\StorageServiceInterface;
use Xibo\Support\Exception\ConfigurationException;
use Xibo\Support\Exception\GeneralException;
use Xibo\Support\Exception\NotFoundException;

/**
 * MediaServiceInterface
 * Provides common functionality for library media
 */
interface MediaServiceInterface
{
    /**
     * MediaService constructor.
     * @param ConfigServiceInterface $configService
     * @param LogServiceInterface $logService
     * @param StorageServiceInterface $store
     * @param SanitizerService $sanitizerService
     * @param PoolInterface $pool
     * @param MediaFactory $mediaFactory
     * @param FontFactory $fontFactory
     */
    public function __construct(
        ConfigServiceInterface $configService,
        LogServiceInterface $logService,
        StorageServiceInterface $store,
        SanitizerService $sanitizerService,
        PoolInterface $pool,
        MediaFactory $mediaFactory,
        FontFactory $fontFactory
    );

    /**
     * @param User $user
     */
    public function setUser(User $user): MediaServiceInterface;

    /**
     * @return User
     */
    public function getUser(): User;

    /**
     * @return PoolInterface
     */
    public function getPool() : PoolInterface;

    /**
     * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher
     * @return MediaServiceInterface
     */
    public function setDispatcher(EventDispatcherInterface $dispatcher): MediaServiceInterface;

    /**
     * Library Usage
     * @return int
     */
    public function libraryUsage(): int;

    /**
     * @return $this
     * @throws \Xibo\Support\Exception\ConfigurationException
     */
    public function initLibrary(): MediaServiceInterface;

    /**
     * @return $this
     * @throws \Xibo\Support\Exception\LibraryFullException
     */
    public function checkLibraryOrQuotaFull($isCheckUser = false): MediaServiceInterface;

    /**
     * @param $size
     * @return \Xibo\Service\MediaService
     * @throws \Xibo\Support\Exception\InvalidArgumentException
     */
    public function checkMaxUploadSize($size): MediaServiceInterface;

    /**
     * Get download info for a URL
     *  we're looking for the file size and the extension
     * @param $url
     * @return array
     */
    public function getDownloadInfo($url): array;

    /**
     * @return array|mixed
     * @throws ConfigurationException
     * @throws \Xibo\Support\Exception\DuplicateEntityException
     * @throws \Xibo\Support\Exception\GeneralException
     * @throws \Xibo\Support\Exception\InvalidArgumentException
     * @throws \Xibo\Support\Exception\NotFoundException
     */
    public function updateFontsCss();

    /**
     * @param $libraryFolder
     * @throws ConfigurationException
     */
    public static function ensureLibraryExists($libraryFolder);

    /**
     * Remove temporary files
     */
    public function removeTempFiles();

    /**
     * Removes all expired media files
     * @throws NotFoundException
     * @throws GeneralException
     */
    public function removeExpiredFiles();
}
