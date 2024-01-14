# What ist Docker

- Docker is an Open Source standalone application which as an engine used to run
  containerized applications. It is installed on your operating system, preferably on Linux, but can be
  also installed on Windows and macOs.
  Or: Docker is a tool designed to make it easier to create, deploy, and run application by using containers.

- An application running in a Container is isolated from the rest of systen and from other containers, but gives the illusion of running in its own OD i   Instance

- Containerized applications are applications run in isolated packages of code called containers. 
  Containers include all the dependencies that an application might need to run on any host operating system, such as libraries, binaries, configuration files, and frameworks, into a single lightweight executable.

## What is a Docker Container?
- A Docker Container image is a lightweight, standalone, executable package of software that includes everything that the application needs to run, such
    as code, runtime, libraries, tools, settings, configuration. and more. 
  
- It packages applications as images that contain everything needed to run them:  code, runtime, libraries, tools,
  settings, configuration

  It provides you with the possibility to simply put all the code and its dependencies into one container for easier and more efficient transmission.
  
- Multiple Docker Containers can be run on the single operating system simultaneously, you can manage those containers with Docker

- Docker applications run in containers that can be used on any system: a laptop, on premises, or in the cloud.
- Simply we can say Docker is a container management service.

### Docker Architecture

- Image:  An image is read-only template with instructions for creating a Docker container. you may build, an image which is based on the Ubuntu image,
          SQL Server or Nginx Server

- Container: A container is a runnable instance of an image. You can create, start, stop, move, or delete a container using the Docker API or CLI.

- Registry: A Docker registry stores Docker images. Docker Hub is Public registry
            that anyone can use, and Docker is configured to look for images on Docker Hub by default, You can even run your private registry.

- Client: The Docker client is the primary way that many Docker users interact with Docker. When you use commands such as docker run, the client sends
          these commands to dockerd, which carries them out. The docker command uses the Docker API.

- Docker daemon: The Docker daemon listens for Docker API requests and manages Docker objects such as images, containers, networks, and volumes.


### Namespaces
- Docker uses a technology called namespaces to provide the isolated workspace called the container. 
  When you run a container, Docker creates a set of namespaces for that container. These namespaces provide a layer of isolation.
  Each aspect of a container runs in a separate namespace and its access is liited to that namespace.

