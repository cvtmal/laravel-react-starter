# cvtmal/laravel-react-starter

A Laravel starter kit that comes preconfigured with modern PHP tools, coding standards, and an opinionated project structure. This starter kit is designed to help you jumpstart your Laravel projects with robust quality checks, static analysis, and architectural guidelines.

## Requirements

- **PHP Version:** 8.4
- **Laravel Version:** 12.x

## Features

### Static Analysis & Quality Assurance
- **Larastan/PHPStan:** Configured with `phpstan.neon` set to maximum level (10). Note that framework-specific code is annotated with `// @phpstan-ignore-line` to bypass false positives.
- **Rector PHP:** Automated refactoring and code modernization.
- **Laravel Pint:** Enforced with custom strict rules defined in `pint.json` for consistent code style.
### Project Structure
- **Actions:** All application-specific actions reside in `app/Actions`.
- **Enums:** Place your enumerations in `app/Enums`.
- **Services:** Business logic and service layer code is located in `app/Services`.
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

## Project Structure

```plaintext
├── app
│   ├── Actions/                         # Application actions
│   ├── Enums/                           # Enumeration classes
│   ├── Providers/AppServiceProvider.php # Custom Service provider
│   └── Services/                        # Business logic and service classes
├── tests
│   └── Unit
│       ├── Actions/                     # Unit tests for actions
│       ├── Enums/                       # Unit tests for enums
│       └── Models/                      # Unit tests for models
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
