# TYPO3-sentry-client-js

_TYPO3 Extension to integrate client-side error reporting with [Sentry](http://www.sentry.io)_.
IMPORTANT: We don't support this extension anymore. This extension will be archived.


### Description

The extension adds the Sentry JavaScript library ([Raven.js](https://github.com/getsentry/raven-js)) into your page. 

**Example Output**

    <script src="https://cdn.ravenjs.com/3.8.0/raven.min.js" crossorigin="anonymous"></script>
    <script>Raven.config('https://xxxxxxxxxxxxxxxxx@sentry.io/xxxxxx').install();</script>


### Installation

    composer require aoe/sentry-client-js

After the Extension is installed, you can add the Static Include for the Extension (sentry_client_js).

### Configuration

You can set your Sentry client key (DSN) with a TypoScript constant:

    const.tx_sentry_client_js.dsn = https://xxxxxxxxxxxxxxxxx@sentry.io/xxxxxx
    
You can set the desired [Raven.js](https://github.com/getsentry/raven-js) version:

    const.tx_sentry_client_js.client_version = 3.13.1
    
#### Activate / Deactivate

If you do not set your DSN the script is not included.
