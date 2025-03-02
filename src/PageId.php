<?php
/**
 * PageId automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Notion;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('')]
class PageId implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Key('page_id')]
    #[Description('')]
    protected ?string $pageId = null;
    public function setPageId(?string $pageId): void
    {
        $this->pageId = $pageId;
    }
    public function getPageId(): ?string
    {
        return $this->pageId;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('page_id', $this->pageId);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
