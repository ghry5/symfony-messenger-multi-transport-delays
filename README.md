# symfony-messenger-multi-transport-delays
A example to reproduce a bug in symfony/messenger

# Run consumer

```
symfony console messenger:consume high low -vv
```

# Trigger Messages

```
# start server
symfony server:start

# trigger a high prio message:
curl localhost:8000/high

# trigger a low prio message:
curl localhost:8000/low
```

# Issue

Notice how triggering a high priority message instantly produces the process output of the consumer, while a low priority message takes a couple of seconds/minutes to be processed even to the high priority queue is empty.
