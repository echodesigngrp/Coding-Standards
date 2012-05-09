# CoffeeScript Standards

## Naming Conventions for Variables

Always uses underscore, not camelcase.

**Correct:**
```CoffeeScript
add_numbers = (x, y) -> alert(x+y)
```

**Incorrect:**
```CoffeeScript
addNumbers = (x, y) -> alert(x+y)
```

Keep line length in mind.

**Crazy:**
```CoffeeScript
items = if i == 15 ? item[15] : (if i == 14 ? item[14] : (if i == 13 ? item[13] : item[1]))
```

**Logical, Sane:**
```CoffeeScript
items  = item[15] if i == 15
items  = item[14] if i == 14
items  = item[13] if i == 13
items ?= item[1]
```

## Methods/Functions

Though functions do not need to have parenthesis in CoffeeScript, it has a tendency to make the code harder to read. Always wrap function arguments in parenthesis.

**Correct:**
```CoffeeScript
$('li').not '.business'
```

**Incorrect:**
```CoffeeScript
$('li').not('.business')
```

## Object Reference

Always use `@`, not `this.`, to refer to the current scope.

## jQuery Events

Always bind event methods (`=>`) and use Event object's target property to grab the element. This keeps the scope from changing.

**Correct:**
```CoffeeScript
$('li').click((e) =>
	$(e.target).hide()
)
```

**Incorrect:**
```CoffeeScript
$('li').click((e) ->
	$(this).hide()
)
```