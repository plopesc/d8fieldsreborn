  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields['title'] = FieldDefinition::create('string')
      ->setLabel(t('Title'))
      ->setDescription(t('The title of this node, always treated as non-markup plain text.'))
      // ...
      ->setSettings(array(                  // Array settings...
      ))
      ->setDisplayOptions('view', array(    // Array options...
      ))
      ->setDisplayOptions('form', array(    // Array options...
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
  // ...
}
