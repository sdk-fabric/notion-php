<?php
/**
 * DatabaseTitle automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Notion;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('')]
class DatabaseTitle implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?string $type = null;
    #[Description('')]
    protected ?string $text = null;
    #[Description('')]
    protected ?DatabaseAnnotations $annotations = null;
    #[Key('plain_text')]
    #[Description('')]
    protected ?string $plainText = null;
    #[Description('')]
    protected ?string $href = null;
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    public function getType() : ?string
    {
        return $this->type;
    }
    public function setText(?string $text) : void
    {
        $this->text = $text;
    }
    public function getText() : ?string
    {
        return $this->text;
    }
    public function setAnnotations(?DatabaseAnnotations $annotations) : void
    {
        $this->annotations = $annotations;
    }
    public function getAnnotations() : ?DatabaseAnnotations
    {
        return $this->annotations;
    }
    public function setPlainText(?string $plainText) : void
    {
        $this->plainText = $plainText;
    }
    public function getPlainText() : ?string
    {
        return $this->plainText;
    }
    public function setHref(?string $href) : void
    {
        $this->href = $href;
    }
    public function getHref() : ?string
    {
        return $this->href;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('type', $this->type);
        $record->put('text', $this->text);
        $record->put('annotations', $this->annotations);
        $record->put('plain_text', $this->plainText);
        $record->put('href', $this->href);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
