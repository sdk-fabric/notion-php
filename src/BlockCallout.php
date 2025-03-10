<?php
/**
 * BlockCallout automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Notion;

use PSX\Schema\Attribute\Description;

#[Description('')]
class BlockCallout extends Block implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?Callout $callout = null;
    public function setCallout(?Callout $callout): void
    {
        $this->callout = $callout;
    }
    public function getCallout(): ?Callout
    {
        return $this->callout;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('callout', $this->callout);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
