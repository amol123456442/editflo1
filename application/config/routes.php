<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'documentation';
$route['alldocfile/documentation'] = 'documentation/index';
$route['documentation/getting-started'] = 'documentation/getting_started';
$route['documentation/getting-started/introduction'] = 'documentation/getting_started_introduction';

// Installation Routes
$route['documentation/getting-started/installation'] = 'documentation/getting_started_installation';
$route['documentation/getting-started/installation/cloud'] = 'documentation/getting_started_cloud';
$route['documentation/getting-started/installation/cloud/quick-start'] = 'documentation/getting_started_cloud_quickstart';
$route['documentation/getting-started/installation/cloud/react'] = 'documentation/getting_started_cloud_react';
$route['documentation/getting-started/installation/cloud/angular'] = 'documentation/getting_started_cloud_angular';
$route['documentation/getting-started/installation/cloud/vue'] = 'documentation/getting_started_cloud_vue';
$route['documentation/getting-started/installation/cloud/blazor'] = 'documentation/getting_started_cloud_blazor';
$route['documentation/getting-started/installation/cloud/blazor-ref'] = 'documentation/getting_started_cloud_blazor_ref';
$route['documentation/getting-started/installation/cloud/svelte'] = 'documentation/getting_started_cloud_svelte';
$route['documentation/getting-started/installation/cloud/web-component'] = 'documentation/getting_started_cloud_webcomponent';
$route['documentation/getting-started/installation/cloud/jquery'] = 'documentation/getting_started_cloud_jquery';
$route['documentation/getting-started/installation/cloud/django'] = 'documentation/getting_started_cloud_django';
$route['documentation/getting-started/installation/cloud/laravel'] = 'documentation/getting_started_cloud_laravel';
$route['documentation/getting-started/installation/cloud/ruby-on-rails'] = 'documentation/getting_started_cloud_rails';
$route['documentation/getting-started/installation/cloud/bootstrap'] = 'documentation/getting_started_cloud_bootstrap';

// Self-hosted Routes
$route['documentation/getting-started/installation/self-hosted'] = 'documentation/getting_started_self_hosted';
$route['documentation/getting-started/installation/self-hosted/quick-start'] = 'documentation/getting_started_self_hosted_quickstart';
$route['documentation/getting-started/installation/self-hosted/react'] = 'documentation/getting_started_self_hosted_react';
$route['documentation/getting-started/installation/self-hosted/angular'] = 'documentation/getting_started_self_hosted_angular';
$route['documentation/getting-started/installation/self-hosted/vue'] = 'documentation/getting_started_self_hosted_vue';
$route['documentation/getting-started/installation/self-hosted/blazor'] = 'documentation/getting_started_self_hosted_blazor';
$route['documentation/getting-started/installation/self-hosted/svelte'] = 'documentation/getting_started_self_hosted_svelte';
$route['documentation/getting-started/installation/self-hosted/web-component'] = 'documentation/getting_started_self_hosted_webcomponent';
$route['documentation/getting-started/installation/self-hosted/jquery'] = 'documentation/getting_started_self_hosted_jquery';
$route['documentation/getting-started/installation/self-hosted/java-swing'] = 'documentation/getting_started_self_hosted_java';

// ZIP Routes
$route['documentation/getting-started/installation/zip'] = 'documentation/getting_started_zip';
$route['documentation/getting-started/upgrading'] = 'documentation/getting_started_upgrading';

// Self-hosted Supported Integrations Routes
$route['documentation/getting-started/installation/self-hosted/supported-integrations'] = 'documentation/getting_started_self_hosted_supported_integrations';

// Self-hosted React Package Manager Routes
$route['documentation/getting-started/installation/self-hosted/react/package-manager-hosting'] = 'documentation/getting_started_self_hosted_react_package_hosting';
$route['documentation/getting-started/installation/self-hosted/react/package-manager-bundling'] = 'documentation/getting_started_self_hosted_react_package_bundling';

// Self-hosted Angular Package Manager
$route['documentation/getting-started/installation/self-hosted/angular/package-manager'] = 'documentation/getting_started_self_hosted_angular_package';

// Self-hosted Vue.js Package Manager
$route['documentation/getting-started/installation/self-hosted/vue/package-manager'] = 'documentation/getting_started_self_hosted_vue_package';

// Self-hosted Blazor Package Manager
$route['documentation/getting-started/installation/self-hosted/blazor/package-manager'] = 'documentation/getting_started_self_hosted_blazor_package';

// Self-hosted Svelte Package Manager
$route['documentation/getting-started/installation/self-hosted/svelte/package-manager'] = 'documentation/getting_started_self_hosted_svelte_package';

// Self-hosted Web Component Package Manager
$route['documentation/getting-started/installation/self-hosted/web-component/package-manager'] = 'documentation/getting_started_self_hosted_webcomponent_package';

// Self-hosted jQuery Package Manager
$route['documentation/getting-started/installation/self-hosted/jquery/package-manager'] = 'documentation/getting_started_self_hosted_jquery_package';

// Self-hosted Java Swing
$route['documentation/getting-started/installation/self-hosted/java-swing'] = 'documentation/getting_started_self_hosted_java_swing';


// ZIP Installation Routes
$route['documentation/getting-started/installation/zip'] = 'documentation/getting_started_zip';
$route['documentation/getting-started/installation/zip/quick-start'] = 'documentation/getting_started_zip_quickstart';
$route['documentation/getting-started/installation/zip/supported-integrations'] = 'documentation/getting_started_zip_supported_integrations';

// ZIP React Integration
$route['documentation/getting-started/installation/zip/react'] = 'documentation/getting_started_zip_react';
$route['documentation/getting-started/installation/zip/react/hosting'] = 'documentation/getting_started_zip_react_hosting';
$route['documentation/getting-started/installation/zip/react/bundling'] = 'documentation/getting_started_zip_react_bundling';

// ZIP Angular Integration
$route['documentation/getting-started/installation/zip/angular'] = 'documentation/getting_started_zip_angular';
$route['documentation/getting-started/installation/zip/angular/package'] = 'documentation/getting_started_zip_angular_package';

// ZIP Vue.js Integration
$route['documentation/getting-started/installation/zip/vue'] = 'documentation/getting_started_zip_vue';
$route['documentation/getting-started/installation/zip/vue/package'] = 'documentation/getting_started_zip_vue_package';

// ZIP Blazor Integration
$route['documentation/getting-started/installation/zip/blazor'] = 'documentation/getting_started_zip_blazor';
$route['documentation/getting-started/installation/zip/blazor/package'] = 'documentation/getting_started_zip_blazor_package';

// ZIP Svelte Integration
$route['documentation/getting-started/installation/zip/svelte'] = 'documentation/getting_started_zip_svelte';
$route['documentation/getting-started/installation/zip/svelte/package'] = 'documentation/getting_started_zip_svelte_package';

// ZIP Web Component Integration
$route['documentation/getting-started/installation/zip/web-component'] = 'documentation/getting_started_zip_webcomponent';
$route['documentation/getting-started/installation/zip/web-component/package'] = 'documentation/getting_started_zip_webcomponent_package';

// ZIP Java Swing Integration
$route['documentation/getting-started/installation/zip/java-swing'] = 'documentation/getting_started_zip_java';

// ZIP Backend Integrations
$route['documentation/getting-started/installation/zip/django'] = 'documentation/getting_started_zip_django';
$route['documentation/getting-started/installation/zip/laravel'] = 'documentation/getting_started_zip_laravel';
$route['documentation/getting-started/installation/zip/ruby-on-rails'] = 'documentation/getting_started_zip_rails';

// ZIP Other Integrations
$route['documentation/getting-started/installation/zip/bootstrap'] = 'documentation/getting_started_zip_bootstrap';
$route['documentation/getting-started/installation/zip/upgrading'] = 'documentation/getting_started_zip_upgrading';

// Examples Routes
$route['documentation/examples'] = 'documentation/examples';
$route['documentation/examples/general'] = 'documentation/examples_general';
$route['documentation/examples/general/basicdocumentation/examples/general/basic'] = 'documentation/examples_general_basic';
$route['documentation/examples/general/full-featured-open-source'] = 'documentation/examples_general_full_featured_opensource';
$route['documentation/examples/general/full-featured-premium'] = 'documentation/examples_general_full_featured_premium';
$route['documentation/examples/general/classic-editor'] = 'documentation/examples_general_classic_editor';
$route['documentation/examples/general/inline-editor'] = 'documentation/examples_general_inline_editor';
$route['documentation/examples/general/distraction-free-editor'] = 'documentation/examples_general_distraction_free_editor';

// Integration Examples
$route['documentation/examples/integration'] = 'documentation/examples_integration';
$route['documentation/examples/integration/template-creation'] = 'documentation/examples_integration_template_creation';

// Skins and Icons Examples
$route['documentation/examples/skins-icons'] = 'documentation/examples_skins_icons';
$route['documentation/examples/skins-icons/bootstrap'] = 'documentation/examples_skins_icons_bootstrap';
$route['documentation/examples/skins-icons/borderless'] = 'documentation/examples_skins_icons_borderless';
$route['documentation/examples/skins-icons/fabric'] = 'documentation/examples_skins_icons_fabric';
$route['documentation/examples/skins-icons/fluent'] = 'documentation/examples_skins_icons_fluent';
$route['documentation/examples/skins-icons/jam-icons'] = 'documentation/examples_skins_icons_jam';
$route['documentation/examples/skins-icons/material-classic'] = 'documentation/examples_skins_icons_material_classic';
$route['documentation/examples/skins-icons/material-outline'] = 'documentation/examples_skins_icons_material_outline';
$route['documentation/examples/skins-icons/naked'] = 'documentation/examples_skins_icons_naked';
$route['documentation/examples/skins-icons/outside'] = 'documentation/examples_skins_icons_outside';
$route['documentation/examples/skins-icons/small-icons'] = 'documentation/examples_skins_icons_small';
$route['documentation/examples/skins-icons/snow'] = 'documentation/examples_skins_icons_snow';

// Initial Configuration Routes
$route['documentation/initial-configuration'] = 'Documentation/initial_configuration';
$route['documentation/initial-configuration/integration-options'] = 'Documentation/integration_options';
$route['documentation/initial-configuration/size'] = 'Documentation/size';
$route['documentation/initial-configuration/save-submit'] = 'Documentation/save_and_submit';
$route['documentation/initial-configuration/promotions'] = 'Documentation/promotions';

// Security Routes
$route['documentation/security'] = 'documentation/security';
$route['documentation/security/guide'] = 'documentation/security_guide';
$route['documentation/security/guide/reporting-issues'] = 'documentation/security_reporting_issues';
$route['documentation/security/guide/maintenance'] = 'documentation/security_maintenance';
$route['documentation/security/guide/configuring-csp'] = 'documentation/security_configuring_csp';
$route['documentation/security/guide/general-risks'] = 'documentation/security_general_risks';
$route['documentation/security/guide/content-security-policies'] = 'documentation/security_content_security_policies';
$route['documentation/security/guide/cors'] = 'documentation/security_cors';

// Release Notes for Editflo Routes
$route['documentation/release-notes/editflo'] = 'documentation/release_notes_editflo';
$route['documentation/release-notes/editflo/0-1'] = 'documentation/editflo_0_1';
$route['documentation/release-notes/editflo/0-1/overview'] = 'documentation/editflo_0_1_overview';
$route['documentation/release-notes/editflo/0-1/new-premium-plugins'] = 'documentation/editflo_0_1_new_premium_plugins';
$route['documentation/release-notes/editflo/0-1/premium-plugin-changes'] = 'documentation/editflo_0_1_premium_plugin_changes';
$route['documentation/release-notes/editflo/0-1/improvements'] = 'documentation/editflo_0_1_improvements';
$route['documentation/release-notes/editflo/0-1/additions'] = 'documentation/editflo_0_1_additions';

// Editflo API Reference
$route['documentation/api-reference/editflo'] = 'documentation/editflo_api_reference';
$route['documentation/api-reference/editflo/add-on-manager'] = 'documentation/editflo_add_on_manager';
$route['documentation/api-reference/editflo/annotator'] = 'documentation/editflo_annotator';
$route['documentation/api-reference/editflo/editor'] = 'documentation/editflo_editor';
$route['documentation/api-reference/editflo/editor-manager'] = 'documentation/editflo_editor_manager';
$route['documentation/api-reference/editflo/editor-mode'] = 'documentation/editflo_editor_mode';
$route['documentation/api-reference/editflo/editor-options'] = 'documentation/editflo_editor_options';
$route['documentation/api-reference/editflo/editor-upload'] = 'documentation/editflo_editor_upload';
$route['documentation/api-reference/editflo/env'] = 'documentation/editflo_env';
$route['documentation/api-reference/editflo/event'] = 'documentation/editflo_event';
$route['documentation/api-reference/editflo/fake-clipboard'] = 'documentation/editflo_fake_clipboard';
$route['documentation/api-reference/editflo/formatter'] = 'documentation/editflo_formatter';
$route['documentation/api-reference/editflo/notification-manager'] = 'documentation/editflo_notification_manager';
$route['documentation/api-reference/editflo/plugin'] = 'documentation/editflo_plugin';
$route['documentation/api-reference/editflo/shortcuts'] = 'documentation/editflo_shortcuts';
$route['documentation/api-reference/editflo/theme'] = 'documentation/editflo_theme';
$route['documentation/api-reference/editflo/undo-manager'] = 'documentation/editflo_undo_manager';
$route['documentation/api-reference/editflo/user-lookup'] = 'documentation/editflo_user_lookup';
$route['documentation/api-reference/editflo/window-manager'] = 'documentation/editflo_window_manager';
// Editflo Editor UI API Reference
$route['documentation/api-reference/editflo-editor-ui'] = 'documentation/editflo_editor_ui';
$route['documentation/api-reference/editflo-editor-ui/registry'] = 'documentation/editflo_editor_ui_registry';
$route['documentation/api-reference/editflo-editor-ui/ui'] = 'documentation/editflo_editor_ui_ui';

// Editflo HTML API Reference
$route['documentation/api-reference/editflo-html/domparser'] = 'documentation/editflo_html_domparser';
$route['documentation/api-reference/editflo-html/entities'] = 'documentation/editflo_html_entities';
$route['documentation/api-reference/editflo-html/node'] = 'documentation/editflo_html_node';
$route['documentation/api-reference/editflo-html/schema'] = 'documentation/editflo_html_schema';
$route['documentation/api-reference/editflo-html/serializer'] = 'documentation/editflo_html_serializer';
$route['documentation/api-reference/editflo-html/styles'] = 'documentation/editflo_html_styles';
$route['documentation/api-reference/editflo-html/writer'] = 'documentation/editflo_html_writer';
$route['documentation/api-reference/editflo-html'] = 'documentation/editflo_html';

// Editflo Util API Reference
$route['documentation/api-reference/editflo-util/delay'] = 'documentation/editflo_util_delay';
$route['documentation/api-reference/editflo-util/event-dispatcher'] = 'documentation/editflo_util_event_dispatcher';
$route['documentation/api-reference/editflo-util/i18n'] = 'documentation/editflo_util_i18n';
$route['documentation/api-reference/editflo-util/image-uploader'] = 'documentation/editflo_util_image_uploader';
$route['documentation/api-reference/editflo-util/observable'] = 'documentation/editflo_util_observable';
$route['documentation/api-reference/editflo-util/tools'] = 'documentation/editflo_util_tools';
$route['documentation/api-reference/editflo-util/uri'] = 'documentation/editflo_util_uri';
$route['documentation/api-reference/editflo-util'] = 'documentation/editflo_util';


// Other main sections
$route['documentation/integration'] = 'documentation/integration';
$route['documentation/configuration'] = 'documentation/configuration';
$route['documentation/basic-setup'] = 'documentation/basic_setup';
// Add these 4 routes with correct controller and method names
$route['documentation/invalid-api-key'] = 'documentation/invalid_api_key';
$route['documentation/license-key'] = 'documentation/license_key';
$route['documentation/support'] = 'documentation/support';
$route['documentation/usage-based-billing'] = 'documentation/usage_based_billing';
$route['documentation/api'] = 'documentation/api';
$route['404_override'] = 'errors/show_404';
$route['translate_uri_dashes'] = FALSE;
