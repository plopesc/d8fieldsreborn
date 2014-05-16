interface WidgetInterface extends WidgetBaseInterface {
  public static function defaultSettings()
  public function settingsForm(array $form, array &$form_state);
  public function settingsSummary();
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, array &$form_state);
  public function errorElement(array $element, ConstraintViolationInterface $violation, array $form, array &$form_state);
  public function massageFormValues(array $values, array $form, array &$form_state);
}
