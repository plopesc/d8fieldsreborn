interface ConfigFieldItemInterface extends FieldItemInterface {
  public static function schema(FieldConfigInterface $field);
  public function settingsForm(array $form, array &$form_state, $has_data);
  public function instanceSettingsForm(array $form, array &$form_state);
}
