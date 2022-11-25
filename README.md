# Demo [`typo3/html-sanitizer`](https://github.com/typo3/html-sanitizer)

## Install

```
git clone https://github.com/ohader/html-sanitizer-demo.git
cd html-sanitizer-demo
composer install
```

## Run

(requires `composer` v2)

```
composer serve
```

Open the dev server at [`http://127.0.0.1:9001/`](http://127.0.0.1:9001/) in any browser and test XSS payloads.

## Report Security Vulnerabilities

In case you identified new cross-site scripting vulnerabilities in `typo3/html-sanitizer`,
please report them to the TYPO3 Security Team either via

* [reporting a new GitHub Security Advisory](https://github.com/TYPO3/html-sanitizer/security/advisories/new)
* [writing a mail to security@typo3.org](mailto:security@typo3.org)
