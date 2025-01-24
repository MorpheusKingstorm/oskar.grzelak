<div align="center">
  <img 
    src="https://img.freepik.com/free-photo/high-angle-defocused-wooden-cubes-with-password-laptop_23-2148578071.jpg?t=st=1737704542~exp=1737708142~hmac=c774025184b7b7761de6ee77419b8c04965d653dd4075580cee12084cd96fd18&w=2000" 
    alt="Password" 
    width="500">
</div>

# Login

To verify your password it uses ARGON2ID hash algorythm.
The password input is hashed and is compared with hashed password in database.

App is created in PHP language, that fits website based apps.

## Why ARGON2ID?

ARGON2ID is a highly secure password hashing algorithm, designed to provide robust protection against brute-force attacks and side-channel attacks. It combines the benefits of both ARGON2I (resistant to side-channel attacks) and ARGON2D (optimized for memory-hard computation), making it the preferred choice for securing sensitive data such as passwords.

### Key Features of ARGON2ID:
- **Memory-Hard**: ARGON2ID requires significant memory to compute, making it highly resistant to GPU-based attacks.
- **Customizable Parameters**: Allows adjustments to memory, time, and parallelism costs, providing flexibility for different security and performance needs.
- **Future-Proof**: Widely recognized as a modern, secure algorithm recommended by experts in the field of cryptography.

By using ARGON2ID, this system ensures the highest level of security for user passwords, meeting industry best practices for modern applications.

### What Can Be Used Instead of ARGON2ID?
While ARGON2ID is considered the most secure and modern password hashing algorithm, there are other options that may be suitable depending on your use case:

#### 1. BCrypt

**Pros**: Widely adopted, easy to use, and secure for many applications.
**Cons**: Not memory-hard, which makes it more vulnerable to advanced GPU attacks compared to ARGON2ID.
#### 2. PBKDF2 (Password-Based Key Derivation Function 2)

**Pros**: Supported by many libraries and compliant with older systems.
**Cons**: Less secure than ARGON2ID due to weaker resistance to side-channel and GPU attacks.
#### 3. SCrypt

**Pros**: Memory-hard algorithm designed to resist brute-force attacks.
**Cons**: More resource-intensive and slower compared to ARGON2ID.

**Why Not Use These Alternatives?**
Although alternatives like BCrypt, PBKDF2, and SCrypt have been widely used in the past, ARGON2ID provides a better balance between security, performance, and future-proofing. It is designed specifically to address weaknesses in older algorithms, making it the recommended choice for modern applications.

## TODO

- register option
- css style
