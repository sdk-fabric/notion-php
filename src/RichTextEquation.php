<?php
/**
 * RichTextEquation automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Notion;

use PSX\Schema\Attribute\Description;

#[Description('')]
class RichTextEquation extends RichText implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?Equation $equation = null;
    public function setEquation(?Equation $equation): void
    {
        $this->equation = $equation;
    }
    public function getEquation(): ?Equation
    {
        return $this->equation;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('equation', $this->equation);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
