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
    // Add these methods to your Documentation controller
    public function invalid_api_key()
    {
        $data['page_title'] = 'Invalid API Key - Editflo Documentation';
        $data['active_page'] = 'invalid-api-key';
        $data['active_section'] = '';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    public function license_key()
    {
        $data['page_title'] = 'License Key - Editflo Documentation';
        $data['active_page'] = 'license-key';
        $data['active_section'] = '';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    public function support()
    {
        $data['page_title'] = 'Support - Editflo Documentation';
        $data['active_page'] = 'support';
        $data['active_section'] = '';
        $data['active_subsection'] = '';
        $this->load->view('alldocfile/layout', $data);
    }

    public function usage_based_billing()
    {
        $data['page_title'] = 'Usage-Based Billing - Editflo Documentation';
        $data['active_page'] = 'usage-based-billing';
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
    // Release notes for Editflo
    public function release_notes_editflo()
    {
        $data['page_title'] = 'Release notes for Editflo - Editflo Documentation';
        $data['active_page'] = 'release-notes';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = '';
        $data['content_view'] = 'alldocfile/release_notes_editflo';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo 0.1
    public function editflo_0_1()
    {
        $data['page_title'] = 'Editflo 0.1 - Editflo Documentation';
        $data['active_page'] = 'release-notes';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = '0-1';
        $data['content_view'] = 'alldocfile/editflo_0_1';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo 0.1 Overview
    public function editflo_0_1_overview()
    {
        $data['page_title'] = 'Editflo 0.1 Overview - Editflo Documentation';
        $data['active_page'] = 'release-notes';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = '0-1-overview'; // Changed to unique value
        $data['content_view'] = 'alldocfile/editflo_0_1_overview';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo 0.1 New Premium plugins
    public function editflo_0_1_new_premium_plugins()
    {
        $data['page_title'] = 'Editflo 0.1 New Premium plugins - Editflo Documentation';
        $data['active_page'] = 'release-notes';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = '0-1-new-premium-plugins'; // Changed to unique value
        $data['content_view'] = 'alldocfile/editflo_0_1_new_premium_plugins';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo 0.1 Accompanying Premium plugin changes
    public function editflo_0_1_premium_plugin_changes()
    {
        $data['page_title'] = 'Editflo 0.1 Accompanying Premium plugin changes - Editflo Documentation';
        $data['active_page'] = 'release-notes';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = '0-1-premium-plugin-changes'; // Changed to unique value
        $data['content_view'] = 'alldocfile/editflo_0_1_premium_plugin_changes';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo 0.1 Improvements
    public function editflo_0_1_improvements()
    {
        $data['page_title'] = 'Editflo 0.1 Improvements - Editflo Documentation';
        $data['active_page'] = 'release-notes';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = '0-1-improvements'; // Changed to unique value
        $data['content_view'] = 'alldocfile/editflo_0_1_improvements';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo 0.1 Additions
    public function editflo_0_1_additions()
    {
        $data['page_title'] = 'Editflo 0.1 Additions - Editflo Documentation';
        $data['active_page'] = 'release-notes';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = '0-1-additions'; // Changed to unique value
        $data['content_view'] = 'alldocfile/editflo_0_1_additions';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo API Reference
    public function editflo_api_reference()
    {
        $data['page_title'] = 'Editflo API Reference - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = '';
        $data['content_view'] = 'alldocfile/editflo_api_reference';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo AddOnManager
    public function editflo_add_on_manager()
    {
        $data['page_title'] = 'Editflo AddOnManager - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'add-on-manager';
        $data['content_view'] = 'alldocfile/editflo_add_on_manager';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo Annotator
    public function editflo_annotator()
    {
        $data['page_title'] = 'Editflo Annotator - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'annotator';
        $data['content_view'] = 'alldocfile/editflo_annotator';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo Editor
    public function editflo_editor()
    {
        $data['page_title'] = 'Editflo Editor - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'editor';
        $data['content_view'] = 'alldocfile/editflo_editor';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo EditorManager
    public function editflo_editor_manager()
    {
        $data['page_title'] = 'Editflo EditorManager - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'editor-manager';
        $data['content_view'] = 'alldocfile/editflo_editor_manager';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo EditorMode
    public function editflo_editor_mode()
    {
        $data['page_title'] = 'Editflo EditorMode - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'editor-mode';
        $data['content_view'] = 'alldocfile/editflo_editor_mode';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo EditorOptions
    public function editflo_editor_options()
    {
        $data['page_title'] = 'Editflo EditorOptions - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'editor-options';
        $data['content_view'] = 'alldocfile/editflo_editor_options';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo EditorUpload
    public function editflo_editor_upload()
    {
        $data['page_title'] = 'Editflo EditorUpload - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'editor-upload';
        $data['content_view'] = 'alldocfile/editflo_editor_upload';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo Env
    public function editflo_env()
    {
        $data['page_title'] = 'Editflo Env - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'env';
        $data['content_view'] = 'alldocfile/editflo_env';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo Event
    public function editflo_event()
    {
        $data['page_title'] = 'Editflo Event - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'event';
        $data['content_view'] = 'alldocfile/editflo_event';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo FakeClipboard
    public function editflo_fake_clipboard()
    {
        $data['page_title'] = 'Editflo FakeClipboard - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'fake-clipboard';
        $data['content_view'] = 'alldocfile/editflo_fake_clipboard';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo Formatter
    public function editflo_formatter()
    {
        $data['page_title'] = 'Editflo Formatter - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'formatter';
        $data['content_view'] = 'alldocfile/editflo_formatter';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo NotificationManager
    public function editflo_notification_manager()
    {
        $data['page_title'] = 'Editflo NotificationManager - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'notification-manager';
        $data['content_view'] = 'alldocfile/editflo_notification_manager';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo Plugin
    public function editflo_plugin()
    {
        $data['page_title'] = 'Editflo Plugin - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'plugin';
        $data['content_view'] = 'alldocfile/editflo_plugin';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo Shortcuts
    public function editflo_shortcuts()
    {
        $data['page_title'] = 'Editflo Shortcuts - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'shortcuts';
        $data['content_view'] = 'alldocfile/editflo_shortcuts';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo Theme
    public function editflo_theme()
    {
        $data['page_title'] = 'Editflo Theme - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'theme';
        $data['content_view'] = 'alldocfile/editflo_theme';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo UndoManager
    public function editflo_undo_manager()
    {
        $data['page_title'] = 'Editflo UndoManager - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'undo-manager';
        $data['content_view'] = 'alldocfile/editflo_undo_manager';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo UserLookup
    public function editflo_user_lookup()
    {
        $data['page_title'] = 'Editflo UserLookup - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'user-lookup';
        $data['content_view'] = 'alldocfile/editflo_user_lookup';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo WindowManager
    public function editflo_window_manager()
    {
        $data['page_title'] = 'Editflo WindowManager - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo';
        $data['active_subsection'] = 'window-manager';
        $data['content_view'] = 'alldocfile/editflo_window_manager';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo Editor UI
    public function editflo_editor_ui()
    {
        $data['page_title'] = 'Editflo Editor UI - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo-editor-ui';
        $data['active_subsection'] = '';
        $data['content_view'] = 'alldocfile/editflo_editor_ui';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo Editor UI Registry
    public function editflo_editor_ui_registry()
    {
        $data['page_title'] = 'Editflo Editor UI Registry - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo-editor-ui';
        $data['active_subsection'] = 'registry';
        $data['content_view'] = 'alldocfile/editflo_editor_ui_registry';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo Editor UI Ui
    public function editflo_editor_ui_ui()
    {
        $data['page_title'] = 'Editflo Editor UI Ui - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo-editor-ui';
        $data['active_subsection'] = 'ui';
        $data['content_view'] = 'alldocfile/editflo_editor_ui_ui';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo HTML
    public function editflo_html()
    {
        $data['page_title'] = 'Editflo HTML - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo-html';
        $data['active_subsection'] = '';
        $data['content_view'] = 'alldocfile/editflo_html';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo HTML DomParser
    public function editflo_html_domparser()
    {
        $data['page_title'] = 'Editflo HTML DomParser - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo-html';
        $data['active_subsection'] = 'domparser';
        $data['content_view'] = 'alldocfile/editflo_html_domparser';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo HTML Entities
    public function editflo_html_entities()
    {
        $data['page_title'] = 'Editflo HTML Entities - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo-html';
        $data['active_subsection'] = 'entities';
        $data['content_view'] = 'alldocfile/editflo_html_entities';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo HTML Node
    public function editflo_html_node()
    {
        $data['page_title'] = 'Editflo HTML Node - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo-html';
        $data['active_subsection'] = 'node';
        $data['content_view'] = 'alldocfile/editflo_html_node';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo HTML Schema
    public function editflo_html_schema()
    {
        $data['page_title'] = 'Editflo HTML Schema - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo-html';
        $data['active_subsection'] = 'schema';
        $data['content_view'] = 'alldocfile/editflo_html_schema';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo HTML Serializer
    public function editflo_html_serializer()
    {
        $data['page_title'] = 'Editflo HTML Serializer - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo-html';
        $data['active_subsection'] = 'serializer';
        $data['content_view'] = 'alldocfile/editflo_html_serializer';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo HTML Styles
    public function editflo_html_styles()
    {
        $data['page_title'] = 'Editflo HTML Styles - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo-html';
        $data['active_subsection'] = 'styles';
        $data['content_view'] = 'alldocfile/editflo_html_styles';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo HTML Writer
    public function editflo_html_writer()
    {
        $data['page_title'] = 'Editflo HTML Writer - Editflo Documentation';
        $data['active_page'] = 'api-reference';
        $data['active_section'] = 'editflo-html';
        $data['active_subsection'] = 'writer';
        $data['content_view'] = 'alldocfile/editflo_html_writer';
        $this->load->view('alldocfile/layout', $data);
    }

    // Editflo Util
public function editflo_util()
{
    $data['page_title'] = 'Editflo Util - Editflo Documentation';
    $data['active_page'] = 'api-reference';
    $data['active_section'] = 'editflo-util';
    $data['active_subsection'] = '';
    $data['content_view'] = 'alldocfile/editflo_util';
    $this->load->view('alldocfile/layout', $data);
}

// Editflo Util Delay
public function editflo_util_delay()
{
    $data['page_title'] = 'Editflo Util Delay - Editflo Documentation';
    $data['active_page'] = 'api-reference';
    $data['active_section'] = 'editflo-util';
    $data['active_subsection'] = 'delay';
    $data['content_view'] = 'alldocfile/editflo_util_delay';
    $this->load->view('alldocfile/layout', $data);
}

// Editflo Util EventDispatcher
public function editflo_util_event_dispatcher()
{
    $data['page_title'] = 'Editflo Util EventDispatcher - Editflo Documentation';
    $data['active_page'] = 'api-reference';
    $data['active_section'] = 'editflo-util';
    $data['active_subsection'] = 'event-dispatcher';
    $data['content_view'] = 'alldocfile/editflo_util_event_dispatcher';
    $this->load->view('alldocfile/layout', $data);
}

// Editflo Util 11Sn
public function editflo_util_i18n()
{
    $data['page_title'] = 'Editflo Util I18n - Editflo Documentation';
    $data['active_page'] = 'api-reference';
    $data['active_section'] = 'editflo-util';
    $data['active_subsection'] = 'i18n'; // Changed from 11sn to i18n
    $data['content_view'] = 'alldocfile/editflo_util_i18n';
    $this->load->view('alldocfile/layout', $data);
}
// Editflo Util ImageUploader
public function editflo_util_image_uploader()
{
    $data['page_title'] = 'Editflo Util ImageUploader - Editflo Documentation';
    $data['active_page'] = 'api-reference';
    $data['active_section'] = 'editflo-util';
    $data['active_subsection'] = 'image-uploader';
    $data['content_view'] = 'alldocfile/editflo_util_image_uploader';
    $this->load->view('alldocfile/layout', $data);
}

// Editflo Util Observable
public function editflo_util_observable()
{
    $data['page_title'] = 'Editflo Util Observable - Editflo Documentation';
    $data['active_page'] = 'api-reference';
    $data['active_section'] = 'editflo-util';
    $data['active_subsection'] = 'observable';
    $data['content_view'] = 'alldocfile/editflo_util_observable';
    $this->load->view('alldocfile/layout', $data);
}

// Editflo Util Tools
public function editflo_util_tools()
{
    $data['page_title'] = 'Editflo Util Tools - Editflo Documentation';
    $data['active_page'] = 'api-reference';
    $data['active_section'] = 'editflo-util';
    $data['active_subsection'] = 'tools';
    $data['content_view'] = 'alldocfile/editflo_util_tools';
    $this->load->view('alldocfile/layout', $data);
}

// Editflo Util URI
public function editflo_util_uri()
{
    $data['page_title'] = 'Editflo Util URI - Editflo Documentation';
    $data['active_page'] = 'api-reference';
    $data['active_section'] = 'editflo-util';
    $data['active_subsection'] = 'uri';
    $data['content_view'] = 'alldocfile/editflo_util_uri';
    $this->load->view('alldocfile/layout', $data);
}
}
