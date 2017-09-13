# Sparklines for WordPress
Sparklines is a WordPress Plugin to enable inline charts powered by the Spark font by After the Flood.

## Using the shortcode
The plugin provides you with a `[spark]` shortcode that takes some input and
generates the appropriate HTML and enqueues the stylesheet.

The basic shortcode format is (with default vaules):  
`[spark start="123" data="10,20,30,40,50,60,70,80,90,100" end="789" type="bar-medium"]`

### Available attributes
| Name | Default | Description |
| --- | --- | --- |
| `start` | 123 | The starting point. Will be displayed before the chart. |
| `data` | 10,20,30,40,50,60,70,80,90,100 | <div>Data points to be rendered inside the graph. Anything that isn't a number will be filtered out (strings, spaces etc.).|
| `end` | 789 | The ending point. Will be displayed after the chart. |
| `type` | bar-medium | Type of chart to be used. See available fonts below. |

### Types of charts
The sparkline charts can be displayed in any of the following types:

- **Medium Bar** (`bar-medium`): ![Medium Bar Sparkline](./img/bar-medium.png)
- **Narrow Bar** (`bar-narrow`): ![Narrow Bar Sparkline](./img/bar-narrow.png)
- **Thin Bar** (`bar-thin`): ![Thin Bar Sparkline](./img/bar-thin.png)
- **Medium Dot** (`dot-medium`): ![Medium Dot Sparkline](./img/dot-medium.png)
- **Small Dot** (`dot-small`): ![Small Dot Sparkline](./img/dot-small.png)

## The font
AtF Spark is a font that allows for the combination of text and visual data to show an idea and evidence in one headline. This builds on the principle of Sparklines defined by Edward Tufte and makes them easier to use. Sparklines are currently available as plugins or javascript elements. By installing the Spark font you can use them immediately without the need for custom code.

The font is maintained by **After the flood**. [Read more about the font on their website](http://aftertheflood.co/projects/atf-spark).
