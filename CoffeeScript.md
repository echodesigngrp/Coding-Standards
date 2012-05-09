# CoffeeScript Standards

## Methods/Functions

Though functions do not need to have parenthesis in CoffeeScript (*Figure 1*), it has a tendency to make the code harder to read. Always wrap function arguments in parenthesis (*Figure 2*.)

**Figure 1:**
```CoffeeScript
$('li').not '.business'
```

**Figure 2:**
```CoffeeScript
$('li').not('.business')
```

## Object Reference

Always use `@` to refer to the current scope.

## jQuery Events

Always bind event methods (`=>`) and use Event object's target property to grab the element (*Figure 3*.) This keeps the scope from changing.

**Figure 3:**
```CoffeeScript
$('li').click((e) =>
	$(e.target).hide()
)
```