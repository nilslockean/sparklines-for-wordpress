# Sparklines for WordPress
Sparklines is a WordPress Plugin to enable inline charts powered by the Spark font by After the Flood.

## Using the shortcode
The plugin provides you with a `[spark]` shortcode that takes some input and
generates the appropriate HTML and enqueues the stylesheet.

The basic shortcode format is (with default vaules):  
`[spark start="10" data="12,14,16,18" end="20" type="bar-medium"]`

### Available Attributes
| Name | Default | Description |
| --- | --- | --- |
| `start` | 10 | The starting point. Will be displayed before the chart. |
| `data` | 12,14,16,18 | <div>Data points to be rendered inside the graph. Anything that isn't a number will be filtered out (strings, spaces etc.).|
| `end` | 20 | The ending point. Will be displayed after the chart. |
| `type` | bar-medium | Type of chart to be used. See available fonts below. |

## Types of Charts
The sparkline charts can be displayed in any of the following types:

- **Medium Bar** (`bar-medium`): ![Medium Bar Sparkline](./img/bar-medium.png)
- **Narrow Bar** (`bar-narrow`): ![Narrow Bar Sparkline](./img/bar-narrow.png)
- **Thin Bar** (`bar-thin`): ![Thin Bar Sparkline](./img/bar-thin.png)
- **Medium Dot** (`dot-medium`): ![Medium Dot Sparkline](./img/dot-medium.png)
- **Small Dot** (`dot-small`): ![Small Dot Sparkline](./img/dot-small.png)
