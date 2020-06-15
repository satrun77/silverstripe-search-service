<?php


namespace SilverStripe\SearchService\Service;

trait RegistryAware
{
    /**
     * @var DocumentFetchCreatorRegistry
     */
    private $registry;

    /**
     * @return DocumentFetchCreatorRegistry
     */
    public function getRegistry(): DocumentFetchCreatorRegistry
    {
        return $this->registry;
    }

    /**
     * @param DocumentFetchCreatorRegistry $registry
     * @return RegistryAware
     */
    public function setRegistry(DocumentFetchCreatorRegistry $registry): self
    {
        $this->registry = $registry;
        return $this;
    }
}
