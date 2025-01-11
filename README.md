# Plugin: Dark Style

This plugin change style of cursor and scrollbar and selection of website.

### 1. Custom Cursor

we use the custom cursor arrowhead.svg icon with black color

```css
cursor: url("./arrowhead.svg"), auto;
```

### 2. Scrollbar

We change the static scrollbar of the website with two main colors:

- Shark [ #202222 ]
- Cape Cod [ #464a4a ]

we make the width and height of the scrollbar with 8px

```css
*::-webkit-scrollbar {
  height: 8px;
  width: 8px;
}
*::-webkit-scrollbar-track {
  border-radius: 0px;
  background-color: #202222;
}

*::-webkit-scrollbar-track:hover {
  background-color: #202222;
}

*::-webkit-scrollbar-track:active {
  background-color: #202222;
}

*::-webkit-scrollbar-thumb {
  border-radius: 7px;
  background-color: #464a4a;
}

*::-webkit-scrollbar-thumb:hover {
  background-color: #464a4a;
}

*::-webkit-scrollbar-thumb:active {
  background-color: #464a4a;
}
```

### 3. Seclection

We change the selection background color and the text color by these two color.

```css
::selection {
  background-color: #202222;
  color: bisque;
}
```

Thank you for reading my document of the plugin.

My Webstie: [Visit from here](https://github.com/mahoembaby)
