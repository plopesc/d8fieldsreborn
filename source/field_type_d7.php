function hook_field_info() { }
function hook_field_schema($field) { }
function hook_field_settings_form($field, $instnce, $has_data) { }
function hook_field_instance_settings_form($field, $instance) { }

function hook_field_load($entity_type, $entities, $field, $instances, $langcode, &$items, $age) { }
function hook_field_validate($entity_type, $entity, $field, $instance, $langcode, $items, &$errors) { }
function hook_field_presave($entity_type, $entity, $field, $instance, $langcode, &$items) { }
function hook_field_insert($entity_type, $entity, $field, $instance, $langcode, &$items) { }
function hook_field_update($entity_type, $entity, $field, $instance, $langcode, &$items) { }
function hook_field_delete($entity_type, $entity, $field, $instance, $langcode, &$items) { }
function hook_field_delete_revision($entity_type, $entity, $field, $instance, $langcode, &$items) { }

function hook_field_is_empty($item, $field) { }
function hook_field_prepare_view($entity_type, $entities, $field, $instances, $langcode, &$items) { }
function hook_field_prepare_translation($entity_type, $entity, $field, $instance, $langcode, &$items, $source_entity, $source_langcode) { }
