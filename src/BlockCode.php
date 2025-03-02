<?php
/**
 * BlockCode automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Notion;

use PSX\Schema\Attribute\Description;

#[Description('')]
class BlockCode extends Block implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?Code $code = null;
    public function setCode(?Code $code): void
    {
        $this->code = $code;
    }
    public function getCode(): ?Code
    {
        return $this->code;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('code', $this->code);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
