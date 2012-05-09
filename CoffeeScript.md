# CoffeeScript Standards

## Naming Conventions for Variables

Always uses underscore (*Figure 1*), not camelcase(*Figure 2*.)

**Figure 1:**
```CoffeeScript
add_numbers = (x, y) -> alert(x+y)
```

**Figure 2:**
```CoffeeScript
addNumbers = (x, y) -> alert(x+y)
```

## Methods/Functions

Though functions do not need to have parenthesis in CoffeeScript (*Figure 3*), it has a tendency to make the code harder to read. Always wrap function arguments in parenthesis (*Figure 4*.)

**Figure 3:**
```CoffeeScript
$('li').not '.business'
```

**Figure 4:**
```CoffeeScript
$('li').not('.business')
```

## Object Reference

Always use `@`, not `this.`, to refer to the current scope.

## jQuery Events

Always bind event methods (`=>`) and use Event object's target property to grab the element (*Figure 5*.) This keeps the scope from changing.

**Figure 5:**
```CoffeeScript
$('li').click((e) =>
	$(e.target).hide()
)
```