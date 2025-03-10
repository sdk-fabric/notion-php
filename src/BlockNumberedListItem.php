<?php
/**
 * BlockNumberedListItem automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Notion;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('')]
class BlockNumberedListItem extends Block implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Key('numbered_list_item')]
    #[Description('')]
    protected ?NumberedListItem $numberedListItem = null;
    public function setNumberedListItem(?NumberedListItem $numberedListItem): void
    {
        $this->numberedListItem = $numberedListItem;
    }
    public function getNumberedListItem(): ?NumberedListItem
    {
        return $this->numberedListItem;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('numbered_list_item', $this->numberedListItem);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
