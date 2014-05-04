interface FieldItemInterface {
  public static function schema(FieldDefinitionInterface $field);
  public function getPropertyDefinitions();
  public function getValidationConstraints();
  public function isEmpty();

  public function settingsForm(array $form, array &$form_state, $has_data);
  public function instanceSettingsForm(array $form, array &$form_state);

  public function prepareCache();
  public function preSave();
  public function insert();
  public function update();
  public function delete();
  public function deleteRevision();
}
