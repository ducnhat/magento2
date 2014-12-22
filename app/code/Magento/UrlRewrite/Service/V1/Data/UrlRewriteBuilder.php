<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\UrlRewrite\Service\V1\Data;

use Magento\Framework\Api\ExtensibleObjectBuilder;

/**
 * Data builder class for url rewrite
 */
class UrlRewriteBuilder extends ExtensibleObjectBuilder
{
    /**
     * @var array
     */
    protected $defaultValues = [
        UrlRewrite::REDIRECT_TYPE => 0,
        UrlRewrite::IS_AUTOGENERATED => 1,
        UrlRewrite::METADATA => null,
        UrlRewrite::DESCRIPTION => null,
    ];

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return array_merge($this->defaultValues, $this->data);
    }

    /**
     * @param int $entityId
     *
     * @return $this
     */
    public function setEntityId($entityId)
    {
        return $this->_set(UrlRewrite::ENTITY_ID, $entityId);
    }

    /**
     * @param string $entityType
     *
     * @return $this
     */
    public function setEntityType($entityType)
    {
        return $this->_set(UrlRewrite::ENTITY_TYPE, $entityType);
    }

    /**
     * @param int $isAutogenerated
     *
     * @return $this
     */
    public function setIsAutogenerated($isAutogenerated)
    {
        return $this->_set(UrlRewrite::IS_AUTOGENERATED, $isAutogenerated);
    }

    /**
     * @param string $requestPath
     *
     * @return $this
     */
    public function setRequestPath($requestPath)
    {
        return $this->_set(UrlRewrite::REQUEST_PATH, $requestPath);
    }

    /**
     * @param string $targetPath
     *
     * @return $this
     */
    public function setTargetPath($targetPath)
    {
        return $this->_set(UrlRewrite::TARGET_PATH, $targetPath);
    }

    /**
     * @param int $storeId
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        return $this->_set(UrlRewrite::STORE_ID, $storeId);
    }

    /**
     * @param int $redirectCode
     *
     * @return $this
     */
    public function setRedirectType($redirectCode)
    {
        return $this->_set(UrlRewrite::REDIRECT_TYPE, $redirectCode);
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->_set(UrlRewrite::DESCRIPTION, $description);
    }

    /**
     * @param array $metadata
     *
     * @return $this
     */
    public function setMetadata(array $metadata)
    {
        $metadata = $metadata ? serialize($metadata) : null;
        return $this->_set(UrlRewrite::METADATA, $metadata);
    }
}