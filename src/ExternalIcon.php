<?php
/**
 * ExternalIcon automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Notion;

use PSX\Schema\Attribute\Description;

#[Description('')]
class ExternalIcon extends Icon implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?ExternalObject $external = null;
    public function setExternal(?ExternalObject $external): void
    {
        $this->external = $external;
    }
    public function getExternal(): ?ExternalObject
    {
        return $this->external;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('external', $this->external);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
