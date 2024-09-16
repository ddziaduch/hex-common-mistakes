# Ports and Adapters Architecture common mistakes

Hello there and welcome!
I would like to show you the five common mistakes with the Ports and Adapters Architecture.

## How to navigate
As there are five problems, each problem has its problem branch and the solution branch,
except the problem number five. Let's take the problem number one as an example:
- `problem-one`
- `problem-one-solution`

## The problems

### Confusing port and adapter architecture with layered architecture
Quite often the developers are so attached to the classical layered approach, 
so they lose the whole idea of the Ports and Adapters architecture.
That is the direction of flow of dependencies.
In the most pure form of the Ports and Adapters, there is only application core and everything around it.
The direction of the flow is always from the outer to the inner, never the other way.

### Ports just as interfaces
This problem is about the primary/input/driving ports.
In the typical scenario, there is a class that implements the interface that is the port.
The DI injects such a port to the adapter, so it can drive the application.
What if you would like to use the Command Bus?
The commands and the command bus interface become a new primary/input/driving port.

### Wrong granularity
This problem might occur only in the more complex application that has more than one bounded context.
When the developer tends to first segregate the code by the software architecture rules and later by the bounded contexts.
You might be asking why this is a problem.
It is because it requires each context to use the same software architecture.
Although that might sound like a good idea, it isn't.
Some contexts might be pretty simple, where just following the framework guides and creating a simple CRUD is enough.
On the other hand, the other contexts might be very complex and will require a proper architecture like Ports and Adapters.
The solution is quite simple, first segregate the code by the bounded context and later by the software architecture.

### Anemic adapters
I came up with this name ;). It is a situation where the developer creates a thin adapter that leaks the implementation details into the application core.
Let's say there is a port and an adapter for it, which do HTTP request.
The port signature states that it returns the HTTP response, so the application core has to deal with things like status code, payload decoding, etc.
All this stuff should happen in the adapter itself, which should just return the data that the application cares about.

### Confusing Ports and Adapters, Onion and Clean architecture
The problem is that people do not know what are the differences, and they confuse these types of architecture.
Understanding the differences between these will allow developers to focus on things that are important.
To do this, the history must be known.
The first was Ports and Adapters that was invented around 2000 by Alistair Cockburn.
The main idea of it was focus on the direction of flow of dependencies,
and the segregation of the application core from the externals.
A bit later the Onion architecture was coined, it is basically the Ports and Adapters that applied the segregation of the domain known from the DDD.
Last was the Clean, that added the use cases on top of the Onion architecture.
