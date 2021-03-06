public class BuilderPatternSImpleExample {
  public static void main(String[] args) {
    //
    HouseBuilder hb = new HouseBuilder();
    hb.setHouse(new House());
    House h1 = hb.buildGarage("sdsdgsg").buildKitchen("kiten").getHouse();
    hb.setHouse(new House());
    House h2 =
        hb.buildCoolingSystem("Water heating").buildGarage("Its 2 vehicle parking").getHouse();
    System.out.println(h1);
    System.out.println(h2);
  }
}

class House {
  String room;
  String garage;
  String kitchen;
  String bathroom;
  String coolingSystem;
  String gasType;

  @Override
  public String toString() {
    return "House{"
        + "room='"
        + room
        + '\''
        + ", garage='"
        + garage
        + '\''
        + ", kitchen='"
        + kitchen
        + '\''
        + ", bathroom='"
        + bathroom
        + '\''
        + '}';
  }
}

class HouseBuilder {
  private House house;

  public House getHouse() {
    return house;
  }

  public void setHouse(House house) {
    this.house = house;
  }

  public HouseBuilder buildGarage(String garage) {
    house.garage = garage;
    return this;
  }

  public HouseBuilder buildKitchen(String garage) {
    house.garage = garage;
    return this;
  }

  public HouseBuilder buildCoolingSystem(String coolingSystem) {
    house.coolingSystem = coolingSystem;
    return this;
  }
}
public class BuilderPatternSImpleExample {
  public static void main(String[] args) {
    //
    HouseBuilder hb = new HouseBuilder();
    hb.setHouse(new House());
    House h1 = hb.buildGarage("sdsdgsg").buildKitchen("kiten").getHouse();
    hb.setHouse(new House());
    House h2 =
        hb.buildCoolingSystem("Water heating").buildGarage("Its 2 vehicle parking").getHouse();
    System.out.println(h1);
    System.out.println(h2);
  }
}

class House {
  String room;
  String garage;
  String kitchen;
  String bathroom;
  String coolingSystem;
  String gasType;

  @Override
  public String toString() {
    return "House{"
        + "room='"
        + room
        + '\''
        + ", garage='"
        + garage
        + '\''
        + ", kitchen='"
        + kitchen
        + '\''
        + ", bathroom='"
        + bathroom
        + '\''
        + '}';
  }
}

class HouseBuilder {
  private House house;

  public House getHouse() {
    return house;
  }

  public void setHouse(House house) {
    this.house = house;
  }

  public HouseBuilder buildGarage(String garage) {
    house.garage = garage;
    return this;
  }

  public HouseBuilder buildKitchen(String garage) {
    house.garage = garage;
    return this;
  }

  public HouseBuilder buildCoolingSystem(String coolingSystem) {
    house.coolingSystem = coolingSystem;
    return this;
  }
}
