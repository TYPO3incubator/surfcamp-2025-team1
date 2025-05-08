# TYPO3 Incubator - Reservations

## Introduction
This TYPO3 extension provides a reservation system for TYPO3 websites. It allows you to manage reservations, including the number of guests, date, and time.

## Configuration
The storage pid must be set in the site settings `config/sites/mysite/settings.yaml`

```
reservations:
  storagePid:
```

Otherwise 0 is used as storagePid.

## Usage
A reservation form can be displayed by using the form plugin and set the form definition to "Reservation Form".
The finisher settings must be overwritten. Recipient and sender email must be set.

## Contributing
We welcome contributions to this project! If you have suggestions, bug reports, or feature requests, feel free to open an issue.

<br/>
Made with 🧡 at the TYPO3 Surfcamp 2025
