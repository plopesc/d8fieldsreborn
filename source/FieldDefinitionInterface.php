interface FieldDefinitionInterface {
  public function getFieldName();
  public function getFieldType();
  public function getFieldLabel();
  public function getFieldDescription();
  public function getFieldSettings();
  public function getFieldSetting($setting_name);
  public function isFieldRequired();
  public function isFieldTranslatable();
  public function getFieldCardinality();
  public function isFieldMultiple();
  public function getFieldDefaultValue(EntityInterface $entity);
  public function isFieldConfigurable();
}
