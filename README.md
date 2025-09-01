# Zerotoprod\DataModelEnvoyer

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/data-model-envoyer)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/data-model-envoyer/test.yml?label=test)](https://github.com/zero-to-prod/data-model-envoyer/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/data-model-envoyer/backwards_compatibility.yml?label=backwards_compatibility)](https://github.com/zero-to-prod/data-model-envoyer/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/data-model-envoyer?color=blue)](https://packagist.org/packages/zero-to-prod/data-model-envoyer/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/data-model-envoyer.svg?color=purple)](https://packagist.org/packages/zero-to-prod/data-model-envoyer/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/data-model-envoyer?color=f28d1a)](https://packagist.org/packages/zero-to-prod/data-model-envoyer)
[![License](https://img.shields.io/packagist/l/zero-to-prod/data-model-envoyer?color=pink)](https://github.com/zero-to-prod/data-model/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/data-model-envoyer.svg)](https://wakatime.com/badge/github/zero-to-prod/data-model-envoyer)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/data-model-envoyer?branch=main)](https://hitsofcode.com/github/zero-to-prod/data-model-envoyer/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Installation](#installation)
- [Documentation Publishing](#documentation-publishing)
    - [Automatic Documentation Publishing](#automatic-documentation-publishing)
- [DataModels](#datamodels)
- [Publishing DataModels](#publishing-datamodels)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

This package offers typed classes for [Envoyer API](https://envoyer.io/api-documentation) request and response objects.

## Installation

You can install this package via composer:

```shell
composer require zero-to-prod/data-model-envoyer
```

## Documentation Publishing

You can publish this README to your local documentation directory.

This can be useful for providing documentation for AI agents.

This can be done using the included script:

```bash
# Publish to default location (./docs/zero-to-prod/data-model-envoyer)
vendor/bin/zero-to-prod-data-model-envoyer

# Publish to custom directory
vendor/bin/zero-to-prod-data-model-envoyer /path/to/your/docs
```

### Automatic Documentation Publishing

You can automatically publish documentation by adding the following to your `composer.json`:

```json
{
    "scripts": {
        "post-install-cmd": [
            "zero-to-prod-data-model-envoyer"
        ],
        "post-update-cmd": [
            "zero-to-prod-data-model-envoyer"
        ]
    }
}
```

## DataModels

- [ProjectResponse](https://envoyer.io/api-documentation#list-projects) `\Zerotoprod\DataModelEnvoyer\ProjectResponse::from();`
- [Project](https://envoyer.io/api-documentation#get-project) `\Zerotoprod\DataModelEnvoyer\Project::from();`
- [CreateProject](https://envoyer.io/api-documentation#get-project) `\Zerotoprod\DataModelEnvoyer\CreateProject::from();`
- [UpdateProject](https://envoyer.io/api-documentation#update-project) `\Zerotoprod\DataModelEnvoyer\UpdateProject::from();`
- [UpdateProjectSource](https://envoyer.io/api-documentation#update-project-source) `\Zerotoprod\DataModelEnvoyer\UpdateProjectSource::from();`
- [GetLinkedFolders](https://envoyer.io/api-documentation#get-linked-folders) `\Zerotoprod\DataModelEnvoyer\GetLinkedFolders::from();`
- [Folder](https://envoyer.io/api-documentation#create-linked-folder) `\Zerotoprod\DataModelEnvoyer\Folder::from();`
- [Servers](https://envoyer.io/api-documentation#list-servers) `\Zerotoprod\DataModelEnvoyer\Servers::from();`
- [Server](https://envoyer.io/api-documentation#get-server) `\Zerotoprod\DataModelEnvoyer\Server::from();`
- [CreateServer](https://envoyer.io/api-documentation#create-server) `\Zerotoprod\DataModelEnvoyer\CreateServer::from();`
- [UpdateServer](https://envoyer.io/api-documentation#update-server) `\Zerotoprod\DataModelEnvoyer\UpdateServer::from();`
- [GetEnvironment](https://envoyer.io/api-documentation#get-environment) `\Zerotoprod\DataModelEnvoyer\GetEnvironment::from();`
- [Environment](https://envoyer.io/api-documentation#get-environment) `\Zerotoprod\DataModelEnvoyer\Environment::from();`
- [EnvironmentServers](https://envoyer.io/api-documentation#get-environment-servers) `\Zerotoprod\DataModelEnvoyer\EnvironmentServers::from();`
- [UpdateEnvironment](https://envoyer.io/api-documentation#update-environment) `\Zerotoprod\DataModelEnvoyer\UpdateEnvironment::from();`
- [ResetEnvironment](https://envoyer.io/api-documentation#reset-environment-key) `\Zerotoprod\DataModelEnvoyer\ResetEnvironment::from();`
- [Actions](https://envoyer.io/api-documentation#actions) `\Zerotoprod\DataModelEnvoyer\Actions::from();`
- [Action](https://envoyer.io/api-documentation#actions) `\Zerotoprod\DataModelEnvoyer\Action::from();`
- [Hooks](https://envoyer.io/api-documentation#list-hooks) `\Zerotoprod\DataModelEnvoyer\Hooks::from();`
- [Hook](https://envoyer.io/api-documentation#get-hook) `\Zerotoprod\DataModelEnvoyer\Hook::from();`
- [CreateHook](https://envoyer.io/api-documentation#create-hook) `\Zerotoprod\DataModelEnvoyer\CreateHook::from();`
- [UpdateHook](https://envoyer.io/api-documentation#update-hook) `\Zerotoprod\DataModelEnvoyer\UpdateHook::from();`
- [Deployments](https://envoyer.io/api-documentation#list-deployments) `\Zerotoprod\DataModelEnvoyer\Deployments::from();`
- [Deployment](https://envoyer.io/api-documentation#get-deployment) `\Zerotoprod\DataModelEnvoyer\Deployment::from();`
- [DeployProject](https://envoyer.io/api-documentation#deploy-project) `\Zerotoprod\DataModelEnvoyer\DeployProject::from();`
- [HeartBeats](https://envoyer.io/api-documentation#list-heartbeats) `\Zerotoprod\DataModelEnvoyer\HeartBeats::from();`
- [HeartBeat](https://envoyer.io/api-documentation#get-heartbeat) `\Zerotoprod\DataModelEnvoyer\HeartBeat::from();`
- [CreateHeartBeat](https://envoyer.io/api-documentation#create-heartbeat) `\Zerotoprod\DataModelEnvoyer\CreateHeartBeat::from();`
- [Collaborators](https://envoyer.io/api-documentation#list-collaborators) `\Zerotoprod\DataModelEnvoyer\Collaborators::from();`
- [Collaborator](https://envoyer.io/api-documentation#get-collaborator) `\Zerotoprod\DataModelEnvoyer\Collaborator::from();`
- [CreateCollaborator](https://envoyer.io/api-documentation#create-collaborator) `\Zerotoprod\DataModelEnvoyer\CreateCollaborator::from();`
- [DeleteCollaborator](https://envoyer.io/api-documentation#delete-collaborator) `\Zerotoprod\DataModelEnvoyer\DeleteCollaborator::from();`
- [Notifications](https://envoyer.io/api-documentation#list-notifications) `\Zerotoprod\DataModelEnvoyer\Notifications::from();`
- [Notification](https://envoyer.io/api-documentation#get-notification) `\Zerotoprod\DataModelEnvoyer\Notification::from();`
- [CreateNotification](https://envoyer.io/api-documentation#create-notification) `\Zerotoprod\DataModelEnvoyer\CreateNotification::from();`
- [UpdateNotification](https://envoyer.io/api-documentation#update-notification) `\Zerotoprod\DataModelEnvoyer\UpdateNotification::from();`

## Publishing DataModels

You can directly import these files into your project like this:

```shell
./vendor/bin/data-model-envoyer app/DataModelEnvoyer
```

The first argument is the destination of where the files are copied to.

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/data-model-envoyer/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.
