namespace Drupal\Core\Field;

interface FormatterInterface extends PluginSettingsInterface {
  public function settingsForm(array $form, array &$form_state);
  public function settingsSummary();
  public function prepareView(array $entities_items);
  public function view(FieldItemListInterface $items);
  public function viewElements(FieldItemListInterface $items);
}
