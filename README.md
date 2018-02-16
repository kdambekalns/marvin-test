# Marvin.Test

- install package
- import site
- create Neos backend user
- log in to backend

Visiting http://whatever/test should output

    public: username::Neos.Neos:Backend

Visiting http://whatever/protected should output

    protected: username::Neos.Neos:Backend

If it does not, this is what proves the bug… :)
 
