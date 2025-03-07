<?php
/**
 * BlockChildDatabase automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Notion;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('')]
class BlockChildDatabase extends Block implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Key('child_database')]
    #[Description('')]
    protected ?ChildDatabase $childDatabase = null;
    public function setChildDatabase(?ChildDatabase $childDatabase): void
    {
        $this->childDatabase = $childDatabase;
    }
    public function getChildDatabase(): ?ChildDatabase
    {
        return $this->childDatabase;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('child_database', $this->childDatabase);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
