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