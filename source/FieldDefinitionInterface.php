interface FieldStorageDefinitionInterface {
  public function getName();
  public function getType();
  public function getSettings();
  public function getSetting($setting_name);
  public function isTranslatable();
  public function getDescription();
  public function getCardinality();
  public function isMultiple();
  // Some others...
}
