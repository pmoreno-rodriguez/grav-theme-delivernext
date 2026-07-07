<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class DeliverNext extends Theme
{
    public static function getSubscribedEvents(): array
    {
        return [
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ];
    }

    public function onTwigSiteVariables(): void
    {
        $themeConfig = $this->config->get('themes.delivernext');

        if (isset($themeConfig['custom_css']) && $themeConfig['custom_css'] && file_exists(__DIR__ . '/assets/css/custom.css')) {
            $this->grav['assets']->addCss('theme://assets/css/custom.css', ['priority' => 5]);
        }

        if (isset($themeConfig['custom_js']) && $themeConfig['custom_js'] && file_exists(__DIR__ . '/assets/js/custom.js')) {
            $this->grav['assets']->addJs('theme://assets/js/custom.js', ['group' => 'bottom', 'priority' => 15]);
        }
    }
}
