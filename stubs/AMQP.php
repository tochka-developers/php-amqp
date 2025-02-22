<?php

/**
 * Passing in this constant as a flag will forcefully disable all other flags.
 * Use this if you want to temporarily disable the amqp.auto_ack ini setting.
 */
define('AMQP_NOPARAM', 0);

/**
 * Passing in this constant as a flag to proper methods will forcefully ignore all other flags.
 * Do not send basic.consume request during AMQPQueue::consume(). Use this if you want to run callback on top of previously
 * declared consumers.
 */
define('AMQP_JUST_CONSUME', 1);

/**
 * Durable exchanges and queues will survive a broker restart, complete with all of their data.
 */
define('AMQP_DURABLE', 2);

/**
 * Passive exchanges and queues will not be redeclared, but the broker will throw an error if the exchange or queue does not exist.
 */
define('AMQP_PASSIVE', 4);

/**
 * Valid for queues only, this flag indicates that only one client can be listening to and consuming from this queue.
 */
define('AMQP_EXCLUSIVE', 8);

/**
 * For exchanges, the auto delete flag indicates that the exchange will be deleted as soon as no more queues are bound
 * to it. If no queues were ever bound the exchange, the exchange will never be deleted. For queues, the auto delete
 * flag indicates that the queue will be deleted as soon as there are no more listeners subscribed to it. If no
 * subscription has ever been active, the queue will never be deleted. Note: Exclusive queues will always be
 * automatically deleted with the client disconnects.
 */
define('AMQP_AUTODELETE', 16);

/**
 * Clients are not allowed to make specific queue bindings to exchanges defined with this flag.
 */
define('AMQP_INTERNAL', 32);

/**
 * When passed to the consume method for a clustered environment, do not consume from the local node.
 */
define('AMQP_NOLOCAL', 64);

/**
 * When passed to the {@link AMQPQueue::get()} and {@link AMQPQueue::consume()} methods as a flag,
 * the messages will be immediately marked as acknowledged by the server upon delivery.
 */
define('AMQP_AUTOACK', 128);

/**
 * Passed on queue creation, this flag indicates that the queue should be deleted if it becomes empty.
 */
define('AMQP_IFEMPTY', 256);

/**
 * Passed on queue or exchange creation, this flag indicates that the queue or exchange should be
 * deleted when no clients are connected to the given queue or exchange.
 */
define('AMQP_IFUNUSED', 512);

/**
 * When publishing a message, the message must be routed to a valid queue. If it is not, an error will be returned.
 */
define('AMQP_MANDATORY', 1024);

/**
 * When publishing a message, mark this message for immediate processing by the broker. (High priority message.)
 */
define('AMQP_IMMEDIATE', 2048);

/**
 * If set during a call to {@link AMQPQueue::ack()}, the delivery tag is treated as "up to and including", so that multiple
 * messages can be acknowledged with a single method. If set to zero, the delivery tag refers to a single message.
 * If the AMQP_MULTIPLE flag is set, and the delivery tag is zero, this indicates acknowledgement of all outstanding
 * messages.
 */
define('AMQP_MULTIPLE', 4096);

/**
 * If set during a call to {@link AMQPExchange::bind()}, the server will not respond to the method.The client should not wait
 * for a reply method. If the server could not complete the method it will raise a channel or connection exception.
 */
define('AMQP_NOWAIT', 8192);

/**
 * If set during a call to {@link AMQPQueue::nack()}, the message will be placed back to the queue.
 */
define('AMQP_REQUEUE', 16384);

/**
 * A direct exchange type.
 */
define('AMQP_EX_TYPE_DIRECT', 'direct');

/**
 * A fanout exchange type.
 */
define('AMQP_EX_TYPE_FANOUT', 'fanout');

/**
 * A topic exchange type.
 */
define('AMQP_EX_TYPE_TOPIC', 'topic');

/**
 * A header exchange type.
 */
define('AMQP_EX_TYPE_HEADERS', 'headers');

/**
 *
 */
define('AMQP_OS_SOCKET_TIMEOUT_ERRNO', 536870947);


/**
 *
 */
define('PHP_AMQP_MAX_CHANNELS', 256);

/**
 *
 */
define('AMQP_SASL_METHOD_PLAIN', 0);

/**
 *
 */
define('AMQP_SASL_METHOD_EXTERNAL', 1);


/**
 * Constant for notify about custom amqp-library version
 */
define('AMQP_TOCHKA_EXTENSION', 1);