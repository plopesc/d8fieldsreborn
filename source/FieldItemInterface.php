interface FieldItemInterface {
  public function getPropertyDefinitions();
  public function getValidationConstraints();
  public function isEmpty();
  public function prepareCache();
  public function preSave();
  public function insert();
  public function update();
  public function delete();
  public function deleteRevision();
} // + getEntity(), getLangcode(), getFieldDefinition()...
