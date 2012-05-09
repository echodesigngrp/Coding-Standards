# Questions about Coffee

CoffeeScript removes a lot of the syntactical elements of JavaScript, but sometimes this causes a loss of structure. Below are a couple options for multiple coding scenarios, each option being proper CoffeeScript syntax.

## Functions

**Wrap multiline function in parenthesis:**
```CoffeeScript
fn = (name = 'sir') -> (
	alert("Hello, #{name}!")
)
```

**No parenthesis:**
```CoffeeScript
fn = (name = 'sir') ->
	alert("Hello, #{name}!")
```

## Object Literals

**Wrap object literal in curly brackets**
```CoffeeScript
obj = {
  name: 'Echo Design Group'
  address: '106 Stephen Street, Second Floor'
  city: 'Lemont'
  state: 'Illinois'
}
```

**No brackets**
```CoffeeScript
obj =
  name: 'Echo Design Group'
  address: '106 Stephen Street, Second Floor'
  city: 'Lemont'
  state: 'Illinois'
```