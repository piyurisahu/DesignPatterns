class SingletonClass {
  private static SingletonClass instance = null;

  public String name;

  private SingletonClass() {
    name = "It is singleton";
  }

  public static SingletonClass getInstance() {
    if (instance.name == null) instance = new SingletonClass();

    return instance;
  }
}
