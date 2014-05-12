  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields['nid'] = FieldDefinition::create('integer')
      ->setLabel(t('Node ID'))
      ->setDescription(t('The node ID.'))
      ->setReadOnly(TRUE)
      ->setSetting('unsigned', TRUE);

    $fields['title'] = FieldDefinition::create('string')
      ->setLabel(t('Title'))
      ->setDescription(t('The title of this node, always treated as non-markup plain text.'))
      ->setRequired(TRUE)
      ->setTranslatable(TRUE)
      ->setRevisionable(TRUE)
      ->setSettings(array(
        'default_value' => '',
        'max_length' => 255,
      ))
      ->setDisplayOptions('view', array(
        'label' => 'hidden',
        'type' => 'string',
        'weight' => -5,
      ))
      ->setDisplayOptions('form', array(
        'type' => 'string',
        'weight' => -5,
      ))
      ->setDisplayConfigurable('form', TRUE);
//....
  }
  public static function bundleFieldDefinitions(EntityTypeInterface $entity_type, $bundle, array $base_field_definitions) {
    $node_type = node_type_load($bundle);
    $fields = array();
    if (isset($node_type->title_label)) {
      $fields['title'] = clone $base_field_definitions['title'];
      $fields['title']->setLabel($node_type->title_label);
    }
    return $fields;
  }

}
