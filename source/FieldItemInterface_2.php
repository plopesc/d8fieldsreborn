interface FieldItemInterface {
  public static function schema(FieldDefinitionInterface $field_definition);
  public static function propertyDefinitions();
  public function getConstraints();
  public function isEmpty();

  public static function defaultSettings();
  public static function defaultInstanceSettings();

  public function settingsForm(array $form, array &$form_state, $has_data);
  public function instanceSettingsForm(array $form, array &$form_state);

  public function prepareCache();
  public function preSave();
  public function insert();
  public function update();
  public function delete();
  public function deleteRevision();
}
