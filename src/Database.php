<?php
/**
 * Database automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Notion;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('')]
class Database implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?string $object = null;
    #[Description('')]
    protected ?string $id = null;
    #[Key('created_time')]
    #[Description('')]
    protected ?\PSX\DateTime\LocalDateTime $createdTime = null;
    #[Key('last_edited_time')]
    #[Description('')]
    protected ?\PSX\DateTime\LocalDateTime $lastEditedTime = null;
    #[Description('')]
    protected ?DatabaseIcon $icon = null;
    #[Description('')]
    protected ?DatabaseCover $cover = null;
    #[Description('')]
    protected ?string $url = null;
    /**
     * @var array<DatabaseTitle>|null
     */
    #[Description('')]
    protected ?array $title = null;
    /**
     * @var array<DatabaseTitle>|null
     */
    #[Description('')]
    protected ?array $description = null;
    public function setObject(?string $object) : void
    {
        $this->object = $object;
    }
    public function getObject() : ?string
    {
        return $this->object;
    }
    public function setId(?string $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?string
    {
        return $this->id;
    }
    public function setCreatedTime(?\PSX\DateTime\LocalDateTime $createdTime) : void
    {
        $this->createdTime = $createdTime;
    }
    public function getCreatedTime() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->createdTime;
    }
    public function setLastEditedTime(?\PSX\DateTime\LocalDateTime $lastEditedTime) : void
    {
        $this->lastEditedTime = $lastEditedTime;
    }
    public function getLastEditedTime() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->lastEditedTime;
    }
    public function setIcon(?DatabaseIcon $icon) : void
    {
        $this->icon = $icon;
    }
    public function getIcon() : ?DatabaseIcon
    {
        return $this->icon;
    }
    public function setCover(?DatabaseCover $cover) : void
    {
        $this->cover = $cover;
    }
    public function getCover() : ?DatabaseCover
    {
        return $this->cover;
    }
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * @param array<DatabaseTitle>|null $title
     */
    public function setTitle(?array $title) : void
    {
        $this->title = $title;
    }
    /**
     * @return array<DatabaseTitle>|null
     */
    public function getTitle() : ?array
    {
        return $this->title;
    }
    /**
     * @param array<DatabaseTitle>|null $description
     */
    public function setDescription(?array $description) : void
    {
        $this->description = $description;
    }
    /**
     * @return array<DatabaseTitle>|null
     */
    public function getDescription() : ?array
    {
        return $this->description;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('object', $this->object);
        $record->put('id', $this->id);
        $record->put('created_time', $this->createdTime);
        $record->put('last_edited_time', $this->lastEditedTime);
        $record->put('icon', $this->icon);
        $record->put('cover', $this->cover);
        $record->put('url', $this->url);
        $record->put('title', $this->title);
        $record->put('description', $this->description);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
