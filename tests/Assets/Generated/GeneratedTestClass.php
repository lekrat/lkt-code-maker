<?php  namespace Lkt\CodeMaker\Tests\Assets\Generated; use Lkt\QueryCaller\QueryCaller; use Lkt\Factory\Instantiator\Instantiator; class GeneratedTestClass extends \Lkt\Factory\Instantiator\Instances\AbstractInstance { const GENERATED_TYPE = 'maker-test-component'; public function __construct($id = 0) { parent::__construct($id, static::GENERATED_TYPE); } public function getId() :int { return $this->_getIntegerVal('id'); } public function hasId() :bool { return $this->_hasIntegerVal('id'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function setId(int $id) { $this->_setIntegerVal('id', $id); return $this; } public function getName() :string { return $this->_getStringVal('name'); } public function hasName() :bool { return $this->_hasStringVal('name'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function setName(string $name) { $this->_setStringVal('name', $name); return $this; } public function getDescription() :string { return $this->_getStringVal('description'); } public function hasDescription() :bool { return $this->_hasStringVal('description'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function setDescription(string $description) { $this->_setStringVal('description', $description); return $this; } public function getAge() :int { return $this->_getIntegerVal('age'); } public function hasAge() :bool { return $this->_hasIntegerVal('age'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function setAge(int $age) { $this->_setIntegerVal('age', $age); return $this; } public function getEmailAddress() :string { return $this->_getEmailVal('emailAddress'); } public function hasEmailAddress() :bool { return $this->_hasEmailVal('emailAddress'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function setEmailAddress(string $emailAddress) { $this->_setEmailVal('emailAddress', $emailAddress); return $this; } public function isReady() :bool { return $this->_getBooleanVal('isReady'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function setIsReady(bool $isReady) { $this->_setBooleanVal('isReady', $isReady); return $this; } public function getPrice() :float { return $this->_getFloatVal('price'); } public function getPriceFormatted() :float { return $this->_getFloatFormattedVal('price'); } public function hasPrice() :bool { return $this->_hasFloatVal('price'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function setPrice(float $price) { $this->_setFloatVal('price', $price); return $this; } public function getCreatedAt(): ?\Carbon\Carbon { return $this->_getDateTimeVal('createdAt'); } public function getCreatedAtFormatted(string $format = null) :string { return $this->_getDateTimeFormattedVal('createdAt', $format); } public function hasCreatedAt() :bool { return $this->_hasDateTimeVal('createdAt'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass*/ public function setCreatedAt($createdAt) { $this->_setDateTimeVal('createdAt', $createdAt); return $this; } public function getMoment(): ?\Carbon\Carbon { return $this->_getDateTimeVal('moment'); } public function getMomentFormatted(string $format = null) :string { return $this->_getDateTimeFormattedVal('moment', $format); } public function hasMoment() :bool { return $this->_hasDateTimeVal('moment'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass*/ public function setMoment($moment) { $this->_setDateTimeVal('moment', $moment); return $this; } public function getProperties(): string { return $this->_getForeignListVal('properties'); } public function hasProperties() :bool { return $this->_hasForeignListVal('properties'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass*/ public function setProperties($properties) { $this->_setForeignListVal('properties', $properties); return $this; } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass[]*/ public function getPropertiesData() :array { return $this->_getForeignListData('properties'); } public function getPropertiesIds() :array { return $this->_getForeignListIds('properties'); } public function getMainPropertyId(): int { return $this->_getIntegerVal('mainPropertyId'); } public function hasMainPropertyId() :bool { return $this->_hasIntegerVal('mainPropertyId'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass*/ public function setMainPropertyId(int $mainPropertyId) { $this->_setIntegerVal('mainPropertyId', $mainPropertyId); return $this; } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass*/ public function getMainProperty() :?\Lkt\CodeMaker\Tests\Assets\TestClass { return $this->_getForeignVal('maker-test-component', $this->getMainPropertyId()); } public function hasMainProperty() :bool { return $this->_hasForeignVal('maker-test-component', $this->getMainPropertyId()); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass[] */ public function getRelatedData(): array { return $this->_getRelatedVal('maker-test-component', 'relatedData'); } public function hasRelatedData() :bool { return $this->_hasRelatedVal('maker-test-component', 'relatedData'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function setRelatedDataWithData(array $relatedData) { $this->_setRelatedValWithData('maker-test-component', 'relatedData', $relatedData); return $this; } /** @return \Lkt\Factory\InstanceFactory */ public function getRelatedDataInstanceFactory() { return $this->_getRelatedInstanceFactory('maker-test-component', 'relatedData'); } /** @return \Lkt\CodeMaker\Tests\Assets\Generated */ public function getRelatedDataQueryCaller(): \Lkt\CodeMaker\Tests\Assets\Generated { return $this->_getRelatedCustomQueryCaller('maker-test-component', 'relatedData'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function getRelatedDataSingle() { return $this->_getRelatedValSingle('maker-test-component', 'relatedDataSingle'); } public function hasRelatedDataSingle() :bool { return $this->_hasRelatedVal('maker-test-component', 'relatedDataSingle'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function setRelatedDataSingleWithData(array $relatedDataSingle) { $this->_setRelatedValWithData('maker-test-component', 'relatedDataSingle', $relatedDataSingle); return $this; } /** @return \Lkt\Factory\InstanceFactory */ public function getRelatedDataSingleInstanceFactory() { return $this->_getRelatedInstanceFactory('maker-test-component', 'relatedDataSingle'); } /** @return \Lkt\CodeMaker\Tests\Assets\Generated */ public function getRelatedDataSingleQueryCaller(): \Lkt\CodeMaker\Tests\Assets\Generated { return $this->_getRelatedCustomQueryCaller('maker-test-component', 'relatedDataSingle'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass[]*/ public function getRelatedKeysData(): array { return $this->_getRelatedKeysVal('maker-test-component', 'relatedKeysData'); } public function hasRelatedKeysData() :bool { return $this->_hasRelatedKeysVal('maker-test-component', 'relatedKeysData'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass[]*/ public function getPivotData(): array { return $this->_getPivotVal('pivotData'); } public function hasPivotData() :bool { return $this->_hasPivotVal('pivotData'); } public function getFile() { return $this->_getFileVal('file'); } public function getFileInternalPath() :string { return $this->_getInternalPath('file'); } public function getFileName() :string { return $this->_getFileName('file'); } public function getFilePublicPath() :string { return $this->_getPublicPath('file'); } public function hasFile() :bool { return $this->_hasFileVal('file'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function setFile(string $file) { $this->_setFileVal('file', $file); return $this; } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function setFileInternalPath(string $file) { $this->_setInternalPath('file', $file); return $this; } public function getImage() { return $this->_getFileVal('image'); } public function getImageInternalPath() :string { return $this->_getInternalPath('image'); } public function getImageName() :string { return $this->_getFileName('image'); } public function getImagePublicPath() :string { return $this->_getPublicPath('image'); } public function hasImage() :bool { return $this->_hasFileVal('image'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function setImage(string $image) { $this->_setFileVal('image', $image); return $this; } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function setImageInternalPath(string $image) { $this->_setInternalPath('image', $image); return $this; } public function getFavouriteColor() :string { return $this->_getColorVal('favouriteColor'); } public function getFavouriteColorRgb(float $opacity = null) :array { return $this->_getColorRgbVal('favouriteColor', $opacity); } public function getFavouriteColorRgbFormatted(float $opacity = null) :string { return $this->_getColorRgbStringVal('favouriteColor', $opacity); } public function hasFavouriteColor() :bool { return $this->_hasColorVal('favouriteColor'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass */ public function setFavouriteColor(string $favouriteColor) { $this->_setColorVal('favouriteColor', $favouriteColor); return $this; } public function getSettings() :?\StdClass { return $this->_getJsonVal('settings'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass*/ public function setSettings(\StdClass $settings) { $this->_setJsonVal('settings', $settings); return $this; } public function hasSettings() :bool { return $this->_hasJsonVal('settings'); } public function getAdditionalSettings() :?array { return $this->_getJsonVal('additionalSettings'); } /** @return \Lkt\CodeMaker\Tests\Assets\TestClass*/ public function setAdditionalSettings(array $additionalSettings) { $this->_setJsonVal('additionalSettings', $additionalSettings); return $this; } public function hasAdditionalSettings() :bool { return $this->_hasJsonVal('additionalSettings'); } /** * @return \Lkt\CodeMaker\Tests\Assets\TestClass[] */ public static function getMany(QueryCaller $queryCaller): array { /** @var \Lkt\CodeMaker\Tests\Assets\TestClass[] */ $r = parent::getMany($queryCaller); return $r; } /** * @return \Lkt\CodeMaker\Tests\Assets\TestClass|null */ public static function getOne(QueryCaller $queryCaller) { /** @var \Lkt\CodeMaker\Tests\Assets\TestClass */ $r = parent::getOne($queryCaller); return $r; } /** @return \Lkt\CodeMaker\Tests\Assets\Generated */ public static function getQueryCaller() { /** * @var QueryCaller $caller */ list($caller) = Instantiator::getCustomQueryCaller(static::GENERATED_TYPE); return $caller; } }