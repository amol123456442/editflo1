<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Documentation extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    // Overview
    public function index()
    {
        $data['page_title'] = 'Overview - Editflo Documentation';
        $data['active_page'] = 'overview';
        $data['active_section'] = '';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    // Getting Started Main
    public function getting_started()
    {
        $data['page_title'] = 'Getting Started - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'getting-started';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_introduction()
    {
        $data['page_title'] = 'Introduction - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'introduction';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    // Installation Main
    public function getting_started_installation()
    {
        $data['page_title'] = 'Installation - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    // Cloud Installation
    public function getting_started_cloud()
    {
        $data['page_title'] = 'Cloud Installation - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_quickstart()
    {
        $data['page_title'] = 'Cloud Quick Start - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-quickstart';
        $this->load->view('alldocfile/layout', $data);
    }

    // Cloud Framework Integrations
    public function getting_started_cloud_react()
    {
        $data['page_title'] = 'React Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-react';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_angular()
    {
        $data['page_title'] = 'Angular Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-angular';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_vue()
    {
        $data['page_title'] = 'Vue.js Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-vue';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_blazor()
    {
        $data['page_title'] = 'Blazor Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-blazor';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_svelte()
    {
        $data['page_title'] = 'Svelte Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-svelte';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_webcomponent()
    {
        $data['page_title'] = 'Web Component Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-webcomponent';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_jquery()
    {
        $data['page_title'] = 'jQuery Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-jquery';
        $this->load->view('alldocfile/layout', $data);
    }

    // Cloud Backend Integrations
    public function getting_started_cloud_django()
    {
        $data['page_title'] = 'Django Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-django';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_laravel()
    {
        $data['page_title'] = 'Laravel Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-laravel';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_rails()
    {
        $data['page_title'] = 'Ruby on Rails Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-rails';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_cloud_bootstrap()
    {
        $data['page_title'] = 'Bootstrap Integration - Editflo Cloud';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'cloud-bootstrap';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted Installation
    public function getting_started_self_hosted()
    {
        $data['page_title'] = 'Self-Hosted Installation - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_quickstart()
    {
        $data['page_title'] = 'Self-Hosted Quick Start - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-quickstart';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted Framework Integrations
    public function getting_started_self_hosted_react()
    {
        $data['page_title'] = 'React Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-react';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_angular()
    {
        $data['page_title'] = 'Angular Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-angular';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_vue()
    {
        $data['page_title'] = 'Vue.js Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-vue';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_blazor()
    {
        $data['page_title'] = 'Blazor Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-blazor';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_svelte()
    {
        $data['page_title'] = 'Svelte Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-svelte';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_webcomponent()
    {
        $data['page_title'] = 'Web Component Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-webcomponent';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_jquery()
    {
        $data['page_title'] = 'jQuery Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-jquery';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_self_hosted_java()
    {
        $data['page_title'] = 'Java Swing Integration - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-java';
        $this->load->view('alldocfile/layout', $data);
    }

    // ZIP Installation
    public function getting_started_zip()
    {
        $data['page_title'] = 'ZIP Installation - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip';
        $this->load->view('alldocfile/layout', $data);
    }
    // Upgrading
    public function getting_started_upgrading()
    {
        $data['page_title'] = 'Upgrading Editflo - Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'upgrading';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    // Other main sections
    public function integration()
    {
        $data['page_title'] = 'Integration - Editflo Documentation';
        $data['active_page'] = 'integration';
        $data['active_section'] = '';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    public function configuration()
    {
        $data['page_title'] = 'Configuration - Editflo Documentation';
        $data['active_page'] = 'configuration';
        $data['active_section'] = '';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    public function api()
    {
        $data['page_title'] = 'API Reference - Editflo Documentation';
        $data['active_page'] = 'api';
        $data['active_section'] = '';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted Supported Integrations
    public function getting_started_self_hosted_supported_integrations()
    {
        $data['page_title'] = 'Supported Integrations - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-supported-integrations';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted React with Package Manager (Hosting)
    public function getting_started_self_hosted_react_package_hosting()
    {
        $data['page_title'] = 'React with Package Manager (Hosting) - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-react-package-hosting';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted React with Package Manager (Bundling)
    public function getting_started_self_hosted_react_package_bundling()
    {
        $data['page_title'] = 'React with Package Manager (Bundling) - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-react-package-bundling';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted Angular with Package Manager
    public function getting_started_self_hosted_angular_package()
    {
        $data['page_title'] = 'Angular with Package Manager - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-angular-package';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted Vue.js with Package Manager
    public function getting_started_self_hosted_vue_package()
    {
        $data['page_title'] = 'Vue.js with Package Manager - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-vue-package';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted Blazor with Package Manager
    public function getting_started_self_hosted_blazor_package()
    {
        $data['page_title'] = 'Blazor with Package Manager - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-blazor-package';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted Svelte with Package Manager
    public function getting_started_self_hosted_svelte_package()
    {
        $data['page_title'] = 'Svelte with Package Manager - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-svelte-package';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted Web Component with Package Manager
    public function getting_started_self_hosted_webcomponent_package()
    {
        $data['page_title'] = 'Web Component with Package Manager - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-webcomponent-package';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted jQuery with Package Manager
    public function getting_started_self_hosted_jquery_package()
    {
        $data['page_title'] = 'jQuery with Package Manager - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-jquery-package';
        $this->load->view('alldocfile/layout', $data);
    }

    // Self-hosted Java Swing
    public function getting_started_self_hosted_java_swing()
    {
        $data['page_title'] = 'Java Swing - Self-Hosted Editflo';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'self-hosted-java-swing';
        $this->load->view('alldocfile/layout', $data);
    }
    // ZIP Installation Main


    public function getting_started_zip_quickstart()
    {
        $data['page_title'] = 'ZIP Quick Start Guide - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-quickstart';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_zip_supported_integrations()
    {
        $data['page_title'] = 'ZIP Supported Integrations - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-supported-integrations';
        $this->load->view('alldocfile/layout', $data);
    }

    // ZIP React Integration
    public function getting_started_zip_react()
    {
        $data['page_title'] = 'React Integration - Editflo ZIP';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-react';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_zip_react_hosting()
    {
        $data['page_title'] = 'React with ZIP Package (Hosting) - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-react-hosting';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_zip_react_bundling()
    {
        $data['page_title'] = 'React with ZIP Package (Bundling) - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-react-bundling';
        $this->load->view('alldocfile/layout', $data);
    }

    // ZIP Angular Integration
    public function getting_started_zip_angular()
    {
        $data['page_title'] = 'Angular Integration - Editflo ZIP';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-angular';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_zip_angular_package()
    {
        $data['page_title'] = 'Angular with ZIP Package - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-angular-package';
        $this->load->view('alldocfile/layout', $data);
    }

    // ZIP Vue.js Integration
    public function getting_started_zip_vue()
    {
        $data['page_title'] = 'Vue.js Integration - Editflo ZIP';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-vue';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_zip_vue_package()
    {
        $data['page_title'] = 'Vue.js with ZIP Package - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-vue-package';
        $this->load->view('alldocfile/layout', $data);
    }

    // ZIP Blazor Integration
    public function getting_started_zip_blazor()
    {
        $data['page_title'] = 'Blazor Integration - Editflo ZIP';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-blazor';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_zip_blazor_package()
    {
        $data['page_title'] = 'Blazor with ZIP Package - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-blazor-package';
        $this->load->view('alldocfile/layout', $data);
    }

    // ZIP Svelte Integration
    public function getting_started_zip_svelte()
    {
        $data['page_title'] = 'Svelte Integration - Editflo ZIP';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-svelte';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_zip_svelte_package()
    {
        $data['page_title'] = 'Svelte with ZIP Package - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-svelte-package';
        $this->load->view('alldocfile/layout', $data);
    }

    // ZIP Web Component Integration
    public function getting_started_zip_webcomponent()
    {
        $data['page_title'] = 'Web Component Integration - Editflo ZIP';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-webcomponent';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_zip_webcomponent_package()
    {
        $data['page_title'] = 'Web Component with ZIP Package - Editflo Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-webcomponent-package';
        $this->load->view('alldocfile/layout', $data);
    }

    // ZIP Java Swing Integration
    public function getting_started_zip_java()
    {
        $data['page_title'] = 'Java Swing Integration - Editflo ZIP';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-java';
        $this->load->view('alldocfile/layout', $data);
    }

    // ZIP Backend Integrations
    public function getting_started_zip_django()
    {
        $data['page_title'] = 'Django Integration - Editflo ZIP';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-django';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_zip_laravel()
    {
        $data['page_title'] = 'Laravel Integration - Editflo ZIP';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-laravel';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_zip_rails()
    {
        $data['page_title'] = 'Ruby on Rails Integration - Editflo ZIP';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-rails';
        $this->load->view('alldocfile/layout', $data);
    }

    // ZIP Other Integrations
    public function getting_started_zip_bootstrap()
    {
        $data['page_title'] = 'Bootstrap Integration - Editflo ZIP';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-bootstrap';
        $this->load->view('alldocfile/layout', $data);
    }

    public function getting_started_zip_upgrading()
    {
        $data['page_title'] = 'Upgrading TinyMCE - Editflo ZIP Documentation';
        $data['active_page'] = 'getting-started';
        $data['active_section'] = 'installation';
        $data['active_subsection'] = 'zip-upgrading';
        $this->load->view('alldocfile/layout', $data);
    }

    // Examples Main Page
    public function examples()
    {
        $data['page_title'] = 'Examples - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = '';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    // General Examples
    public function examples_general()
    {
        $data['page_title'] = 'General Examples - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'general-examples';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_general_basic()
    {
        $data['page_title'] = 'Basic Example - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'general-examples';
        $data['active_subsection'] = 'basic-example';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_general_full_featured_opensource()
    {
        $data['page_title'] = 'Full-featured Demo (Open Source) - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'general-examples';
        $data['active_subsection'] = 'full-featured-opensource';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_general_full_featured_premium()
    {
        $data['page_title'] = 'Full-featured Demo (Premium) - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'general-examples';
        $data['active_subsection'] = 'full-featured-premium';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_general_classic_editor()
    {
        $data['page_title'] = 'Classic Editor Mode - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'general-examples';
        $data['active_subsection'] = 'classic-editor';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_general_inline_editor()
    {
        $data['page_title'] = 'Inline Editor - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'general-examples';
        $data['active_subsection'] = 'inline-editor';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_general_distraction_free_editor()
    {
        $data['page_title'] = 'Distraction-free Editor - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'general-examples';
        $data['active_subsection'] = 'distraction-free-editor';
        $this->load->view('alldocfile/layout', $data);
    }

    // Integration Examples
    public function examples_integration()
    {
        $data['page_title'] = 'Integration Examples - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'integration-examples';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_integration_template_creation()
    {
        $data['page_title'] = 'Template Creation Example - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'integration-examples';
        $data['active_subsection'] = 'template-creation';
        $this->load->view('alldocfile/layout', $data);
    }

    // Skins and Icons Examples
    public function examples_skins_icons()
    {
        $data['page_title'] = 'Skins and Icons Examples - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'skins-icons-examples';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_skins_icons_bootstrap()
    {
        $data['page_title'] = 'Bootstrap Demo - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'skins-icons-examples';
        $data['active_subsection'] = 'bootstrap-demo';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_skins_icons_borderless()
    {
        $data['page_title'] = 'Borderless Demo - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'skins-icons-examples';
        $data['active_subsection'] = 'borderless-demo';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_skins_icons_fabric()
    {
        $data['page_title'] = 'Fabric Demo - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'skins-icons-examples';
        $data['active_subsection'] = 'fabric-demo';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_skins_icons_fluent()
    {
        $data['page_title'] = 'Fluent Demo - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'skins-icons-examples';
        $data['active_subsection'] = 'fluent-demo';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_skins_icons_jam()
    {
        $data['page_title'] = 'Jam Icons Demo - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'skins-icons-examples';
        $data['active_subsection'] = 'jam-icons-demo';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_skins_icons_material_classic()
    {
        $data['page_title'] = 'Material Classic Demo - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'skins-icons-examples';
        $data['active_subsection'] = 'material-classic-demo';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_skins_icons_material_outline()
    {
        $data['page_title'] = 'Material Outline Demo - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'skins-icons-examples';
        $data['active_subsection'] = 'material-outline-demo';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_skins_icons_naked()
    {
        $data['page_title'] = 'Naked Demo - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'skins-icons-examples';
        $data['active_subsection'] = 'naked-demo';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_skins_icons_outside()
    {
        $data['page_title'] = 'Outside Demo - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'skins-icons-examples';
        $data['active_subsection'] = 'outside-demo';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_skins_icons_small()
    {
        $data['page_title'] = 'Small Icons Demo - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'skins-icons-examples';
        $data['active_subsection'] = 'small-icons-demo';
        $this->load->view('alldocfile/layout', $data);
    }

    public function examples_skins_icons_snow()
    {
        $data['page_title'] = 'Snow Demo - Editflo Documentation';
        $data['active_page'] = 'examples';
        $data['active_section'] = 'skins-icons-examples';
        $data['active_subsection'] = 'snow-demo';
        $this->load->view('alldocfile/layout', $data);
    }
    public function initial_configuration()
    {
        $data['page_title'] = 'Initial Configuration - Editflo Documentation';
        $data['active_page'] = 'initial-configuration';
        $data['active_section'] = '';
        $data['active_subsection'] = '';
        $data['content_view'] = 'alldocfile/initial_configuration'; // Add this line
        $this->load->view('alldocfile/layout', $data); // Load layout with content_view
    }

    // Integration options
    public function integration_options()
    {
        $data['page_title'] = 'Integration Options - Editflo Documentation';
        $data['active_page'] = 'initial-configuration';
        $data['active_section'] = 'integration-options';
        $data['active_subsection'] = '';
        $data['content_view'] = 'alldocfile/integration_options'; // Add this line
        $this->load->view('alldocfile/layout', $data); // Load layout with content_view
    }
    // Size
    public function size()
    {
        $data['page_title'] = 'Size - Editflo Documentation';
        $data['active_page'] = 'initial-configuration';
        $data['active_section'] = 'size';
        $data['active_subsection'] = '';
        $data['content_view'] = 'alldocfile/size'; // Add this line
        $this->load->view('alldocfile/layout', $data); // Load layout with content_view
    }

    // Save and submit
    public function save_and_submit()
    {
        $data['page_title'] = 'Save and Submit - Editflo Documentation';
        $data['active_page'] = 'initial-configuration';
        $data['active_section'] = 'save-submit';
        $data['active_subsection'] = '';
        $data['content_view'] = 'alldocfile/save_and_submit'; // Add this line
        $this->load->view('alldocfile/layout', $data); // Load layout with content_view
    }

    // Promotions
    public function promotions()
    {
        $data['page_title'] = 'Promotions - Editflo Documentation';
        $data['active_page'] = 'initial-configuration';
        $data['active_section'] = 'promotions';
        $data['active_subsection'] = '';
        $data['content_view'] = 'alldocfile/promotions'; // Add this line
        $this->load->view('alldocfile/layout', $data); // Load layout with content_view
    }


    // Security Main
public function security()
{
    $data['page_title'] = 'Security - Editflo Documentation';
    $data['active_page'] = 'security';
    $data['active_section'] = '';
    $data['active_subsection'] = '';
    $data['content_view'] = 'alldocfile/security'; // security.php
    $this->load->view('alldocfile/layout', $data);
}

// Security Guide
public function security_guide()
{
    $data['page_title'] = 'Security Guide - Editflo Documentation';
    $data['active_page'] = 'security';
    $data['active_section'] = 'security-guide';
    $data['active_subsection'] = '';
    $data['content_view'] = 'alldocfile/security_guide'; // security_guide.php
    $this->load->view('alldocfile/layout', $data);
}

// Reporting Security Issues
public function security_reporting_issues()
{
    $data['page_title'] = 'Reporting TinyMCE Security Issues - Editflo Documentation';
    $data['active_page'] = 'security';
    $data['active_section'] = 'security-guide';
    $data['active_subsection'] = 'reporting-issues';
    $data['content_view'] = 'alldocfile/security_reporting_issues'; // security_reporting_issues.php
    $this->load->view('alldocfile/layout', $data);
}

// Security Maintenance
public function security_maintenance()
{
    $data['page_title'] = 'Security Maintenance - Editflo Documentation';
    $data['active_page'] = 'security';
    $data['active_section'] = 'security-guide';
    $data['active_subsection'] = 'maintenance';
    $data['content_view'] = 'alldocfile/security_maintenance'; // security_maintenance.php
    $this->load->view('alldocfile/layout', $data);
}

// Configuring CSP for TinyMCE
public function security_configuring_csp()
{
    $data['page_title'] = 'Configuring Content Security Policy - Editflo Documentation';
    $data['active_page'] = 'security';
    $data['active_section'] = 'security-guide';
    $data['active_subsection'] = 'configuring-csp';
    $data['content_view'] = 'alldocfile/security_configuring_csp'; // security_configuring_csp.php
    $this->load->view('alldocfile/layout', $data);
}

// General Security Risks
public function security_general_risks()
{
    $data['page_title'] = 'General Security Risks - Editflo Documentation';
    $data['active_page'] = 'security';
    $data['active_section'] = 'security-guide';
    $data['active_subsection'] = 'general-risks';
    $data['content_view'] = 'alldocfile/security_general_risks'; // security_general_risks.php
    $this->load->view('alldocfile/layout', $data);
}

// Content Security Policies (CSP)
public function security_content_security_policies()
{
    $data['page_title'] = 'Content Security Policies - Editflo Documentation';
    $data['active_page'] = 'security';
    $data['active_section'] = 'security-guide';
    $data['active_subsection'] = 'content-security-policies';
    $data['content_view'] = 'alldocfile/security_content_security_policies'; // security_content_security_policies.php
    $this->load->view('alldocfile/layout', $data);
}

// Cross-Origin Resource Sharing (CORS)
public function security_cors()
{
    $data['page_title'] = 'Cross-Origin Resource Sharing - Editflo Documentation';
    $data['active_page'] = 'security';
    $data['active_section'] = 'security-guide';
    $data['active_subsection'] = 'cors';
    $data['content_view'] = 'alldocfile/security_cors'; // security_cors.php
    $this->load->view('alldocfile/layout', $data);
}
}
