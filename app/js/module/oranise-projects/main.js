var OrganiseProjects = {
    // when this page loads up, the main will open this use case
    // it should trigger some hook/events/promises
}

/*
Ideal flow here:

Main will be init on the page load and should start the parent module
other modules will already need to be wired up to listen for that start
some will need to be started automatically

in this module: all other other sub modules kinda need to be started as soon as possible

all that modules will want to be able to access the parent module config
they'll want to overwrite it though for their section
e.g.
 - custom base classes
 - isolating for tests

a reason for not starting a submodule is it may require authentication for only half the page
 */