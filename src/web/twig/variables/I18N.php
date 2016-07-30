<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\app\web\twig\variables;

use Craft;
use craft\app\i18n\Locale;
use yii\helpers\FormatConverter;

/**
 * Localization functions.
 *
 * @author     Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since      3.0
 * @deprecated in 3.0
 */
class I18N
{
    // Public Methods
    // =========================================================================

    /**
     * Gets all known languages.
     *
     * @return Locale[]
     */
    public function getAllLocales()
    {
        Craft::$app->getDeprecator()->log('craft.i18n.getAllLocales()', 'craft.i18n.getAllLocales() has been deprecated. Use craft.app.i18n.allLocales instead.');

        return Craft::$app->getI18n()->getAllLocales();
    }

    /**
     * Returns the locales that the application is translated for.
     *
     * @return Locale[]
     */
    public function getAppLocales()
    {
        Craft::$app->getDeprecator()->log('craft.i18n.getAppLocales()', 'craft.i18n.getAppLocales() has been deprecated. Use craft.app.i18n.appLocales instead.');

        return Craft::$app->getI18n()->getAppLocales();
    }

    /**
     * Returns the current locale.
     *
     * @return Locale
     */
    public function getCurrentLocale()
    {
        Craft::$app->getDeprecator()->log('craft.i18n.getCurrentLocale()', 'craft.i18n.getCurrentLocale() has been deprecated. Use craft.app.locale instead.');

        return Craft::$app->getLocale();
    }

    /**
     * Returns a locale by its ID.
     *
     * @param string $localeId
     *
     * @return Locale
     */
    public function getLocaleById($localeId)
    {
        Craft::$app->getDeprecator()->log('craft.i18n.getLocaleById()', 'craft.i18n.getLocaleById() has been deprecated. Use craft.app.i18n.getLocaleById() instead.');

        return Craft::$app->getI18n()->getLocaleById($localeId);
    }

    /**
     * Returns the locales that the site is translated for.
     *
     * @return Locale[]
     */
    public function getSiteLocales()
    {
        Craft::$app->getDeprecator()->log('craft.i18n.getSiteLocales()', 'craft.i18n.getSiteLocales() has been deprecated. Use craft.app.i18n.siteLocales instead.');

        return Craft::$app->getI18n()->getSiteLocales();
    }

    /**
     * Returns an array of the site locale IDs.
     *
     * @return array
     */
    public function getSiteLocaleIds()
    {
        Craft::$app->getDeprecator()->log('craft.i18n.getSiteLocaleIds()', 'craft.i18n.getSiteLocaleIds() has been deprecated. Use craft.app.i18n.siteLocaleIds instead.');

        return Craft::$app->getI18n()->getSiteLocaleIds();
    }

    /**
     * Returns the site's primary locale.
     *
     * @return string
     */
    public function getPrimarySiteLocale()
    {
        Craft::$app->getDeprecator()->log('craft.i18n.getPrimarySiteLocale()', 'craft.i18n.getPrimarySiteLocale() has been deprecated. Use craft.app.i18n.primarySiteLocale instead.');

        return Craft::$app->getI18n()->getPrimarySiteLocale();
    }

    /**
     * Returns a list of locales that are editable by the current user.
     *
     * @return Locale[]
     */
    public function getEditableLocales()
    {
        Craft::$app->getDeprecator()->log('craft.i18n.getEditableLocales()', 'craft.i18n.getEditableLocales() has been deprecated. Use craft.app.i18n.editableLocales instead.');

        return Craft::$app->getI18n()->getEditableLocales();
    }

    /**
     * Returns an array of the editable locale IDs.
     *
     * @return array
     */
    public function getEditableLocaleIds()
    {
        Craft::$app->getDeprecator()->log('craft.i18n.getEditableLocaleIds()', 'craft.i18n.getEditableLocaleIds() has been deprecated. Use craft.app.i18n.editableLocaleIds instead.');

        return Craft::$app->getI18n()->getEditableLocaleIds();
    }

    /**
     * Returns the localization data for a given locale.
     *
     * @param string|null $localeId
     *
     * @return Locale
     */
    public function getLocaleData($localeId = null)
    {
        Craft::$app->getDeprecator()->log('craft.i18n.getLocaleData()', 'craft.i18n.getLocaleData() has been deprecated. Use craft.app.i18n.getLocaleById() instead.');

        if ($localeId === null) {
            // Return the current application locale
            return Craft::$app->getLocale();
        }

        return new Locale($localeId);
    }

    /**
     * Returns the jQuery UI Datepicker date format, per the current locale.
     *
     * @return string
     */
    public function getDatepickerJsFormat()
    {
        Craft::$app->getDeprecator()->log('craft.i18n.getDatepickerJsFormat()', 'craft.i18n.getDatepickerJsFormat() has been deprecated. Use craft.app.locale.getDateFormat(\'short\', \'jui\') instead.');

        return Craft::$app->getLocale()->getDateFormat(Locale::FORMAT_SHORT, Locale::FORMAT_JUI);
    }

    /**
     * Returns the jQuery Timepicker time format, per the current locale.
     *
     * @return string
     */
    public function getTimepickerJsFormat()
    {
        Craft::$app->getDeprecator()->log('craft.i18n.getTimepickerJsFormat()', 'craft.i18n.getTimepickerJsFormat() has been deprecated. Use craft.app.locale.getTimeFormat(\'short\', \'php\') instead.');

        return Craft::$app->getLocale()->getTimeFormat(Locale::FORMAT_SHORT, Locale::FORMAT_PHP);
    }

    /**
     * Returns whether the [Intl extension](http://php.net/manual/en/book.intl.php) is loaded.
     *
     * @return boolean Whether the Intl extension is loaded.
     */
    public function getIsIntlLoaded()
    {
        Craft::$app->getDeprecator()->log('craft.i18n.getIsIntlLoaded()', 'craft.i18n.getIsIntlLoaded() has been deprecated. Use craft.app.i18n.isIntlLoaded instead.');

        return Craft::$app->getI18n()->getIsIntlLoaded();
    }
}
