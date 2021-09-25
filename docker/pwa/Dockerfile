
ARG NODE_VERSION=16

# "common" stage
FROM node:${NODE_VERSION}-alpine AS opensid_client

EXPOSE 3000
EXPOSE 8080

WORKDIR /client

CMD ["yarn", "dev"]
