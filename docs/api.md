# Webhook API Documentation

## Webhook Create

### Request

```http
POST /api/v1/webhook
```

### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

### Request Body

```json
{
    "name": "Webhook Name",
    "url": "https://example.com/webhook",
    "event": "order.created"
}
```

### Response

```json
{
    "id": 1,
    "name": "Webhook Name",
    "url": "https://example.com/webhook",
    "event": "order.created",
    "created_at": "2021-01-01 00:00:00",
    "updated_at": "2021-01-01 00:00:00"
}
```

## Webhook List

### Request

```http
GET /api/v1/webhook
```

### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

### Response

```json
[
    {
        "id": 1,
        "name": "Webhook Name",
        "url": "https://example.com/webhook",
        "event": "order.created",
        "created_at": "2021-01-01 00:00:00",
        "updated_at": "2021-01-01 00:00:00"
    }
]
```

## Webhook Update

### Request

```http
PUT /api/v1/webhook/{id}
```

### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

### Request Body

```json
{
    "name": "Webhook Name",
    "url": "https://example.com/webhook",
    "event": "order.created"
}
```

### Response

```json
{
    "id": 1,
    "name": "Webhook Name",
    "url": "https://example.com/webhook",
    "event": "order.created",
    "created_at": "2021-01-01 00:00:00",
    "updated_at": "2021-01-01 00:00:00"
}
```

## Webhook Delete

### Request

```http
DELETE /api/v1/webhook/{id}
```

### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

### Response

```json
{
    "message": "Webhook deleted successfully"
}
```

## Webhook Test

### Request

```http
POST /api/v1/webhook/test
```

### Request Header

```http
Content-Type: application/json
Authorization: Bearer {token}
```

### Request Body

```json
{
    "name": "Webhook Name",
    "url": "https://example.com/webhook",
    "event": "order.created"
}
```

### Response

```json
{
    "message": "Webhook test successfully"
}
```
