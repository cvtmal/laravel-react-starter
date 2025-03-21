<p align="center"><img src="https://foxbau.ch/laravel-react-starter.png" width="600"></p>

<p align="center">
<a href="https://github.com/cvtmal/laravel-react-starter/actions"><img src="https://github.com/cvtmal/laravel-react-starter/actions/workflows/tests.yml/badge.svg" alt="Build Status"></a>
<a href="https://github.com/cvtmal/laravel-react-starter"><img src="https://img.shields.io/badge/license-MIT-green" alt="License"></a>
<a href="https://herd.laravel.com/new?starter-kit=cvtmal/laravel-react-starter"><img src="https://img.shields.io/badge/Install%20with%20Herd-f55247?logo=laravel&logoColor=white"></a>
</p>

# cvtmal/laravel-react-starter

A Laravel starter kit that comes preconfigured with modern PHP tools, coding standards, and an opinionated project structure. This starter kit is designed to help you jumpstart your Laravel projects with robust quality checks, static analysis, and architectural guidelines.

## Requirements

- **PHP Version:** 8.4
- **Laravel Version:** 12.x

## Features

### Static Analysis & QA
- **Larastan/PHPStan:** Configured with `phpstan.neon` set to maximum level (10). Note that framework-specific react starter kit code is annotated with `// @phpstan-ignore-line` to bypass false positives.
- **Rector PHP:** Automated refactoring and code modernization.
- **Laravel Pint:** Strict rules defined in `pint.json` for consistent code style.
### Project Structure
- **Actions:** Single-purpose business logic classes independent of HTTP concerns in `app/Actions`.
- **Enums:** Place your enumerations in `app/Enums`.
- **Services:** Service classes get located in `app/Services`.
### Testing
#### Unit Tests:
- Actions tests are in `tests/Unit/Actions`.
- Enums tests are in `tests/Unit/Enums`.
- Models tests are in `tests/Unit/Models`.
#### Architecture Tests:
- Adding `tests/Unit/ArchTest.php`
- Included to ensure the project adheres to established architectural guidelines.
### Custom Configurations
- **AppServiceProvider:** Configured with custom rules to further align with your project requirements.
- **PHPStan:** Custom settings in `phpstan.neon` to suit your project's needs.
- **Rector PHP:** Configured in `rector.php` for automated refactoring.
- **Laravel Pint:** Configured in `pint.json` for code style enforcement.
- **Environment File:** Example environment file provided as `.env.example`.
- **GitHub Actions:** CI/CD pipeline configured in `.github/workflows/tests.yml` for automated testing and quality checks.

## Project Structure

```plaintext
├── app
│   ├── Actions/                         # Actions Pattern
│   ├── Enums/                           # Enums
│   ├── Providers
│       └── AppServiceProvider.php       # Customized App Service Provider
│   └── Services/                        # Service classes
├── tests
│   └── Unit
│       ├── Actions/                     # Unit tests for actions
│       ├── Enums/                       # Unit tests for enums
│       ├── Models/                      # Unit tests for models
│       └── ArchTest.php                 # Architecture tests
├── .env.example                         # Example environment file
├── phpstan.neon                         # PHPStan configuration
├── pint.json                            # Laravel Pint configuration
└── rector.php                           # Rector PHP configuration
```

## Customization
- **PHPStan & Larastan:**
Refer to phpstan.neon for custom settings and the use of // @phpstan-ignore-line in framework-specific code.
- **Rector PHP:**
Adjust the configuration as needed to tailor refactoring rules.
- **Laravel Pint:**
Modify pint.json to enforce or relax specific style guidelines.
- **AppServiceProvider:**
Check the custom rules applied within the App\Providers\AppServiceProvider for application-wide configurations.

## Contributing

Contributions are welcome! Feel free to fork this repository, make improvements, and submit pull requests. Please ensure that your changes adhere to the project's coding standards and pass all tests.

## License

This project is open-source and available under the [MIT License](LICENSE).
